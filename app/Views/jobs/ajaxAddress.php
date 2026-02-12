<?php require(APPPATH."views\common\__css.php"); ?>
<div class='card-datatable'>
    <table id="addressTable" class="table display nowrap responsive" style="width:100%">
				<thead>
				<tr>
				<th>Name</th>      
				<th>Address 1</th>   
				<th>Address 2</th>     
				<th>Room</th>   
				<th>City</th>   
				<th>Zip</th>  
				<th>Contact Name</th>  
				<th>Phone</th>  
				<th>Ext.</th> 
				<th>Instruction</th>
				</tr>
				</thead>

                <tbody>
		<?php $i=0;

		foreach ($address as $d) {
			$i++;
			if($type=='shipping') $onclick='companyName_shipping('.$i.')';
			if($type=='consignee') $onclick='companyName_consignee('.$i.')';
            ?>

					<tr style='cursor: hand;' id='address_<?= $i ?>' data-id='<?= $d['id'] ?>'>
					<td><span onclick='<?= $onclick ?>'><?= $d["name"] ?></span></td>
					<td onclick='<?= $onclick ?>'><?= $d["address1"] ?></td>
					<td onclick='<?= $onclick ?>'><?= $d["address2"] ?></td>  
					<td onclick='<?= $onclick ?>'><?= $d["room"] ?></td>
					<td onclick='<?= $onclick ?>'><?= $d["city"] ?></td>     
					<td onclick='<?= $onclick ?>'><?= $d["zip"] ?></td>    
					<td onclick='<?= $onclick ?>'><?= $d["contact_name"] ?></td>   
					<td onclick='<?= $onclick ?>'><?= $d["phone"] ?></td>  
					<td onclick='<?= $onclick ?>'><?= $d["ext"] ?></td>   
					<td onclick='<?= $onclick ?>'><?= $d["instruction"] ?></td>
					</tr>
		<?php } ?>

        </tbody>	
        </table>
</div>

<?php require(APPPATH."views\common\__js.php"); ?>
<script>
$(document).ready(function(){
            $('#addressTable').DataTable({
                "info":     false,
            });
        });
        </script>