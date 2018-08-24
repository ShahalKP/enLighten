function listVolunteers(){
	var district = $('#District').val();
	$.ajax({
		dataType : 'json',
		url : 'listvolunteers.php',
		data : {district : district},
		method : 'post',
		success : function(data){
			var count = 1;
			console.log(data);
			var output = '<table class="table table-hover dataTable"><thead><tr><th scope="col">#</th><th>Name</th><th>Mobile 1</th><th>Mobile 2</th><th>Field</th><th>District</th></tr></thead>';
			output += '<tbody>';
			$.each(data, function(key, value){
				output += "<tr><td>" + count + "</td><td>"; 
				output += value.one + "</td><td>" + value.two + "</td><td>" +  value.three + "</td><td>" + value.four + "</td><td>" + value.five + "</td></tr>";
				count += 1;
			})
			output += "</tbody></table>";
			$('#data').html(output);
		}
	});
}

function listTasks(){
	var district = $('#District').val();
	$.ajax({
		dataType : 'json',
		url : 'listtasks.php',
		data : {district : district},
		method : 'post',
		success : function(data){
			var id_default = "status"
			var id, name, queued, committed, finished, failed, discared;
			var count = 1;
			var statuses = [];
			//console.log(data);
			var output = '<table class="table table-hover dataTable"><thead><tr><th scope="col">#</th><th scope="col">Name</th><th>Address</th><th>Locality</th><th>Mobile 1</th><th>Mobile 2</th><th>Landmark</th><th>Service</th><th>Status</th></tr></thead>';
			output += '<tbody>';
			$.each(data, function(key, value){
				name = "name" + count;
				mobile = "mobile" + count;
				output += "<tr><td>" + count + "</td><td id=" + name + ">"; 
				output += value.one + "</td><td>" + value.two + "</td><td>" + value.eight + "</td><td id=" + mobile + ">" + value.three + "</td><td>" + value.four + "</td><td>" + value.five + "</td><td>" + value.six;
				id = "status" + count;
				queued = "QUEUED" + count;
				committed = "COMMITTED" + count;
				finished = "FINISHED" + count;
				failed = "FAILED" + count;
				discared = "DISCARDED" + count;
				output += "</td><td><select id='" + id + "' name='status' onchange='myFunction(id)'>";
				output += "<option id='" + queued + "' value='QUEUED'>QUEUED</option>";
				output += "<option id='" + committed + "' value='COMMITTED'>COMMITTED</option>";
				output += "<option id='" + finished + "' value='FINISHED'>FINISHED</option>";
				output += "<option id='" + failed + "' value='FAILED'>FAILED</option>";
				output += "<option id='" + discared + "' value='DISCARDED'>DISCARDED</option>";
				output += "</select></td></tr>";
				statuses[count-1] = value.seven;
				count += 1;
				//$("#name1").attr("size","3em");
			})
			output += "</tbody></table>";
			$('#data').html(output);
			myFunction2(statuses);
			//console.log(statuses);
		}
	});
}

function myFunction(status_id){
	var lastChar = status_id[status_id.length -1];
	var nameId = "name" + lastChar;
	var mobileId = "mobile" + lastChar;
	var new_value = $('#' + status_id).val();
	var name = $('#' + nameId).html();
	var mobile = $('#' + mobileId).html();
	//console.log(status_id);
	//console.log(nameId);
	//console.log(name);
	$.ajax({
		dataType : 'json',
		url : 'updateStatus.php',
		data : {name : name, mobile : mobile, status : new_value},
		method : 'post',
		success : function(data){
			console.log("success");
		}
	});
}
function myFunction2(statuses){
	//console.log("Function2 Called " + statuses[0]);
	var i, id;
	for(i = 0; i < statuses.length; i++){
		id = statuses[i] + (i + 1);
		$('#' + id).attr("selected","selected");
	}

	
}
