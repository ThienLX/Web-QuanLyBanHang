//nút close(trở lại) trong bộ form thêm sửa xóa

document.getElementById("form_close_add").addEventListener("click",close_add);
function close_add(){
	var close = document.getElementById("add-product");
	close.style.display = "none";
}

document.getElementById("form_close_edit").addEventListener("click",close_edit);
function close_edit(){
	var close = document.getElementById("edit-product");
	close.style.display = "none";
}

document.getElementById("form_close_delete").addEventListener("click",close_delete);
function close_delete(){
	var close = document.getElementById("delete-product");
	close.style.display = "none";
}


// hiển thị các form thêm sửa xóa

document.getElementById("btn-add").addEventListener("click",click_add);
function click_add(){
	var add = document.getElementById("add-product");
			add.style.display = "block";
}

document.getElementById("btn-edit").addEventListener("click",click_edit);
function click_edit(){
	var add = document.getElementById("edit-product");
			add.style.display = "block";
}

document.getElementById("btn-delete").addEventListener("click",click_delete);
function click_delete(){
	var add = document.getElementById("delete-product");
			add.style.display = "block";
}

//check form xóa sản phẩm
function check_delete_product(){
	var id = document.getElementById("input_xoa").value;
	if(id ==''){
		document.getElementById("err_xoa").innerHTML = "Không được để trống ID sản phẩm Xóa";
		return false;
	}else if(isNaN(id)){
		document.getElementById("err_xoa").innerHTML = "ID sản phẩm Xóa phải là số";
		return false;
	}else if(id<0){
		document.getElementById("err_xoa").innerHTML = "ID sản phẩm Xóa không đc âm";
		return false;
	}else{
		return true;
	}
}

//check form thêm sản phẩm
function check_add_product(){
	var price = document.getElementById("input_price").value;
	var name = document.getElementById("input_add_name_product").value;
	var type = document.getElementById("input_add_type_product").value;
	var description = document.getElementById("input_add_description_product").value;
	
	if(name.length < 5 || name.length > 50){
		document.getElementById("err_name").innerHTML = "Tên sản phẩm không được nhỏ hơn 5 kí tự hoặc quá 50 kí tự";
		return false;
	}else if(isNaN(price)){
		document.getElementById("err_name").innerHTML = ""
		document.getElementById("err_price").innerHTML = "Giá phải là số";
		return false;
	}else if(price < 0){
		document.getElementById("err_price").innerHTML = "Giá không được âm";
		return false;
	}else if(type.length < 3 || type.length > 10){
		document.getElementById("err_name").innerHTML = ""
		document.getElementById("err_price").innerHTML = "";
		document.getElementById("err_type").innerHTML = "Danh mục không được nhỏ hơn 3 kí tự hoặc quá 10 kí tự";
		return false;
	}else if(description.length < 10 || description.length > 200){
		document.getElementById("err_name").innerHTML = ""
		document.getElementById("err_price").innerHTML = "";
		document.getElementById("err_type").innerHTML = "";
		document.getElementById("err_description").innerHTML = "Mô tả không được nhỏ hơn 10 kí tự hoặc quá 200 kí tự";
		return false;
	}else{
		return true;
	}
}

//check form sửa sp
function check_edit_product(){
	var price = document.getElementById("input_price_edit").value;
	var id_edit = document.getElementById("input_id_edit").value;
	var name_edit = document.getElementById("input_name_edit").value;
	var type_edit = document.getElementById("input_type_edit").value;
	var description_edit = document.getElementById("input_description_edit").value;
	
	if(isNaN(id_edit)){
		document.getElementById("err_id_edit").innerHTML = "ID phải là số";
		return false;
	}else if(id_edit < 0){
		document.getElementById("err_id_edit").innerHTML = "ID không được âm";
		return false;
	}if(name_edit.length < 5 || name_edit.length > 50){
		document.getElementById("err_id_edit").innerHTML = "";
		document.getElementById("err_name_edit").innerHTML = "Tên sản phẩm không được nhỏ hơn 5 kí tự hoặc quá 50 kí tự";
		return false;
	}else if(isNaN(price)){
		document.getElementById("err_name_edit").innerHTML = "";
		document.getElementById("err_price_edit").innerHTML = "Giá phải là số";
		return false;
	}else if(price < 0){
		document.getElementById("err_price_edit").innerHTML = "Giá không được âm";
		return false;
	}else if(type_edit.length < 3 || type_edit.length > 10){
		document.getElementById("err_name_edit").innerHTML = "";
		document.getElementById("err_price_edit").innerHTML = "";
		document.getElementById("err_type_edit").innerHTML = "Danh mục không được nhỏ hơn 3 kí tự hoặc quá 10 kí tự";
		return false;
	}else if(description_edit.length < 10 || description_edit.length > 200){
		document.getElementById("err_name_edit").innerHTML = "";
		document.getElementById("err_price_edit").innerHTML = "";
		document.getElementById("err_type_edit").innerHTML = "";
		document.getElementById("err_description_edit").innerHTML = "Mô tả không được nhỏ hơn 10 kí tự hoặc quá 200 kí tự";
		return false;
	}else{
		return true;
	}
}