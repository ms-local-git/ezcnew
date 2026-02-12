<?php

namespace App\Controllers;

require_once APPPATH . 'ThirdParty/tcpdf/tcpdf.php';
require_once APPPATH . 'ThirdParty/fpdi/src/autoload.php';

use setasign\Fpdi\Tcpdf\Fpdi;







class Dr_papers extends BaseController
{

	public function templates()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$sql1 = 'select * from driver_papers_template';
		$templates = $db->query($sql1)->getResultArray();

		$data["templates"] = $templates;
		return view('dr_papers/templates', $data);
	}

	public function add_template()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		if ($request->getPost() != null) {
			$sql_data = $request->getPost();
			$db->table('driver_papers_template')->insert($sql_data);
			$session->setFlashdata('msg', 'Successfully Addded Template');
		}

		return redirect()->to(base_url() . '/dr_papers/templates');
	}

	public function papers()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$sql = 'select * from driver_papers_template';
		$templates = $db->query($sql)->getResultArray();

		$data["templates"] = $templates;

		$sql1 = 'select driver_papers_template.template_name,driver_papers.* from driver_papers,driver_papers_template where driver_papers.template_id=driver_papers_template.id';
		$papers = $db->query($sql1)->getResultArray();

		$data["papers"] = $papers;
		return view('dr_papers/papers', $data);
	}

	public function update_paper()
	{
		helper("fun_helper");

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$sql_data = $request->getPost();

		if ($sql_data != null) {

			$id = $sql_data['id'];   // paper id
			unset($sql_data['id']);  // remove id from update data
			unset($sql_data['picture']);

			// Handle file upload (only if new file selected)
			if (!empty($_FILES['picture']['name'])) {

				$uploadDir = "assets/images/";
				$fileName  = basename($_FILES['picture']['name']);
				$uploadFilePath = $uploadDir . $fileName;

				if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadFilePath)) {
					$sql_data["display_file_name"] = $fileName;
					$sql_data["file_name"] = $fileName;
				} else {
					echo "Could not upload File.";
					return;
				}
			}


			// Update record
			$db->table('driver_papers')
				->where('id', $id)
				->update($sql_data);

			$session->setFlashdata('msg', 'Successfully Updated Paper');
		}

		return redirect()->to(base_url() . '/dr_papers/papers');
	}


	public function add_paper()
	{
		helper("fun_helper");

		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$sql_data = $request->getPost();
		unset($sql_data['picture']);

		if ($sql_data != null) {
			if (!empty($_FILES['picture']['name'])) {
				$uploadDir = "assets/images/";
				$fileName = basename($_FILES['picture']['name']);

				$uploadFilePath = $uploadDir . $fileName;

				if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadFilePath)) {
					$sql_data["display_file_name"] = $fileName;
					$sql_data["file_name"] = $fileName;
				} else {
					echo "Could not upload File.";
				}
			}
			$db->table('driver_papers')->insert($sql_data);
		}

		$session->setFlashdata('msg', 'Successfully Added Paper');
		return redirect()->to(base_url() . '/dr_papers/papers');
	}

	public function paper_delete()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$id = $request->getPostGet('id');
		$db->table('driver_papers')->where('id', $id)->delete();
		$session->setFlashdata('msg', 'Successfully Deleted Paper');

		return redirect()->to(base_url() . '/dr_papers/papers');
	}

	public function print_paper()
	{
		$request = \Config\Services::request();
		$db      = \Config\Database::connect();

		$id = $request->getGet('id');

		$paper = $db->table('driver_papers')
			->where('id', $id)
			->get()
			->getRowArray();

		if (!$paper) {
			die('Paper not found');
		}

		$filePath = FCPATH . 'assets/images/' . $paper['file_name'];
		$copies   = (int)$paper['no_of_copies'];

		if (!file_exists($filePath) || $copies <= 0) {
			die('Invalid file or copies');
		}

		// Clear any previous output (important!)
		if (ob_get_length()) {
			ob_end_clean();
		}

		$pdf = new Fpdi();
		$pdf->SetCreator('Driver Papers');
		$pdf->SetTitle($paper['paper_name']);
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pageCount = $pdf->setSourceFile($filePath);

		for ($i = 0; $i < $copies; $i++) {
			for ($p = 1; $p <= $pageCount; $p++) {
				$tpl  = $pdf->importPage($p);
				$size = $pdf->getTemplateSize($tpl);

				$pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
				$pdf->useTemplate($tpl);
			}
		}

		// Send proper headers for PDF
		header('Content-Type: application/pdf');
		header('Content-Disposition: inline; filename="' . $paper['paper_name'] . '.pdf"');
		header('Cache-Control: private, max-age=0, must-revalidate');
		header('Pragma: public');

		$pdf->Output($paper['paper_name'] . '.pdf', 'I');
		exit; // Important: stop further output
	}

	public function update_template()
	{
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$db = \Config\Database::connect();

		$data = $request->getPost();

		if (!empty($data['id']) && !empty($data['template_name'])) {
			$id = $data['id'];
			$db->table('driver_papers_template')
				->where('id', $id)
				->update(['template_name' => $data['template_name']]);

			$session->setFlashdata('msg', 'Template updated successfully');
		}

		return redirect()->to(base_url() . '/dr_papers/templates');
	}
}
