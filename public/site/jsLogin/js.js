$(function() {
	var action;
	$(".number-spinner button").mousedown(
			function() {
				btn = $(this);
				input = btn.closest('.number-spinner').find('input');
				btn.closest('.number-spinner').find('button').prop("disabled",
						false);

				if (btn.attr('data-dir') == 'up') {
					action = setInterval(function() {
						if (input.attr('max') == undefined
								|| parseInt(input.val()) < parseInt(input
										.attr('max'))) {
							input.val(parseInt(input.val()) + 1);
						} else {
							btn.prop("disabled", true);
							clearInterval(action);
						}
					}, 50);
				} else {
					action = setInterval(function() {
						if (input.attr('min') == undefined
								|| parseInt(input.val()) > parseInt(input
										.attr('min'))) {
							input.val(parseInt(input.val()) - 1);
						} else {
							btn.prop("disabled", true);
							clearInterval(action);
						}
					}, 50);
				}
			}).mouseup(function() {
		clearInterval(action);
	});
});

function cartAction(action, product_code) {
	var luaChon = 1;
	var queryString = "";
	if (action != "") {
		console.log(action + product_code);
		switch (action) {
		case "add":
			queryString = 'maSanPham=' + product_code;
			break;
		case "delete":
			luaChon = confirm("Bạn có chắc muốn bỏ sản phẩm này?");
			if (luaChon > 0) {
				queryString = 'action=' + action + '&maSanPham=' + product_code;
			}
			break;
		case "edit":
			queryString = 'action=' + action + '&' + product_code;
			console.log(queryString);
			break;
		}
	}
	if (luaChon > 0) {
		jQuery.ajax({
			url : "/them-vao-gio.do",
			data : queryString,
			type : "GET",

			success : function(data) {
				if (action != "") {
					switch (action) {
					case "add":
						$.notify.addStyle('popupThongBao', {
							html : "<div><span data-notify-text/></div>",
							classes : {
								base : {
									"margin-top" : "20px",
									"white-space" : "nowrap",
									"background-color" : "lightblue",
									"font-size" : "14px",
									"padding" : "20px 20px 20px 20px"
								},
								superblue : {
									"color" : "white",
									"background-color" : "blue"
								}
							}
						});

						$.notify("Đã thêm vào giỏ hàng!", {
							style : 'popupThongBao'
						}

						);
						$("#soSanPham").load("/product.do #soSanPham",
								"trangHienTai=1");
						break;
					case "delete":
						var dataCart = $(data).find("#container-cart");
						$("#container-cart").empty();
						$("#container-cart").append(dataCart);
						//
						var dataCartRight = $(data).find("#cart-right");
						$("#cart-right").empty();
						$("#cart-right").append(dataCartRight);

						$("#soSanPham").load("/product.do #soSanPham",
								"trangHienTai=1");

						break;
					case "edit":
						var dataCart = $(data).find("#container-cart");
						$("#container-cart").empty();
						$("#container-cart").append(dataCart);
						//
						var dataCartRight = $(data).find("#cart-right");
						$("#cart-right").empty();
						$("#cart-right").append(dataCartRight);

						$("#soSanPham").load("/product.do #soSanPham",
								"trangHienTai=1");
						break;
					}
				}

			},
			error : function() {
				alert('Có lỗi xảy ra');

			}
		});
	}
}

// Begin check du lieu
// validate form tu van
function validateFormTuVan() {
	var hoTen = $("#hoTen").val();
	var status = 0;
	if (hoTen == "") {
		document.getElementById("errorHoTen").innerHTML = "Chưa nhập họ tên";
		status = 1;
	} else
		document.getElementById("errorHoTen").innerHTML = "";
	var ngaySinh = $("#ngaySinh").val();
	if (ngaySinh == "") {
		document.getElementById("errorNgaySinh").innerHTML = "Chưa nhập ngày sinh";
		status = 1;
	} else
		document.getElementById("errorNgaySinh").innerHTML = "";

	var thangSinh = $("#thangSinh").val();
	if (thangSinh == "") {
		document.getElementById("errorThangSinh").innerHTML = "Chưa nhập tháng sinh";
		status = 1;
	} else {
		var checkThangSinh = thangSinh.match("^\\d{1,2}");
		if (checkThangSinh == null) {
			document.getElementById("errorThangSinh").innerHTML = "Tháng sinh không đúng";
			status = 1;
		} else {
			if (checkThangSinh < 1 || checkThangSinh > 12) {
				document.getElementById("errorThangSinh").innerHTML = "Tháng sinh từ 1 đến 12!";
				status = 1;

			} else {
				document.getElementById("errorThangSinh").innerHTML = "";
			}
		}

	}
	//
	var namSinh = $("#namSinh").val();
	if (namSinh == "") {
		document.getElementById("errorNamSinh").innerHTML = "Chưa nhập năm sinh";
		status = 1;
	} else {
		var checkNamSinh = namSinh.match("^\\d{4}");
		if (checkNamSinh == null) {
			document.getElementById("errorNamSinh").innerHTML = "Năm sinh không đúng";
			status = 1;
		} else {
			var yearCurrent = new Date().getFullYear();
			if (checkNamSinh < 1900 || checkNamSinh > yearCurrent) {
				document.getElementById("errorNamSinh").innerHTML = "Năm sinh phải lơn hơn 1990 và nhỏ hơn "
						+ yearCurrent;
				status = 1;

			} else {
				document.getElementById("errorNamSinh").innerHTML = "";
			}
		}

	}
	//
	var gioiTinh = $("#gioiTinh").prop('selectedIndex');
	if (gioiTinh == 0) {
		document.getElementById("errorGioiTinh").innerHTML = "Chưa chọn giới tính";
		status = 1;
	} else
		document.getElementById("errorGioiTinh").innerHTML = "";

	if (status == 1)
		return false;

	return true;
}

// valiedate form dang nhap
function validateFormDangNhap() {
	var hoTen = $("#tenDangNhap").val();
	var status = 0;
	if (hoTen == "") {
		document.getElementById("errorTenDangNhap").innerHTML = "Chưa nhập tên đăng nhập";
		status = 1;
	} else
		document.getElementById("errorTenDangNhap").innerHTML = "";
	var matKhau = $("#matKhau").val();
	if (matKhau == "") {
		document.getElementById("errorMatKhau").innerHTML = "Chưa nhập mật khẩu";
		status = 1;
	} else
		document.getElementById("errorMatKhau").innerHTML = "";
	if (status == 1)
		return false;

	return true;
}
// validate form dang ky
function validateFormDangKy() {

	// HoDem
	var hoDem = $("#hoDem").val();
	var status = 0;
	if (hoDem == "") {
		document.getElementById("erHoDem").innerHTML = "Chưa nhập họ đệm";
		status = 1;
	} else
		document.getElementById("erHoDem").innerHTML = "";

	// Ten
	var ten = $("#ten").val();
	var status = 0;
	if (ten == "") {
		document.getElementById("erTen").innerHTML = "Chưa nhập tên";
		status = 1;
	} else
		document.getElementById("erTen").innerHTML = "";

	var tenDangNhap = $("#tenDangNhap").val();
	if (tenDangNhap == "") {
		document.getElementById("erTenDangNhap").innerHTML = "Chưa nhập tên đăng nhập";
		status = 1;
	} else
		document.getElementById("erTenDangNhap").innerHTML = "";

	// Ngay SInh
	var ngaySinh = $("#ngaySinh").val();
	if (ngaySinh == "") {
		document.getElementById("erNgaySinh").innerHTML = "Chưa nhập ngày sinh";
		status = 1;
	} else {
		var isValid = false;
		var t = ngaySinh.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);

		if (t !== null) {
			var d = +t[1], m = +t[2], y = +t[3];
			var date = new Date(y, m - 1, d);

			isValid = (date.getFullYear() === y && date.getMonth() === m - 1);
		}
		if (isValid == true) {
			document.getElementById("erNgaySinh").innerHTML = "";
		} else {
			status = 1;
			document.getElementById("erNgaySinh").innerHTML = "Ngày sinh không đúng (dd/MM/yyyy)	";
		}

	}
	// Gioi Tinh
	var gioiTinh = $("#gioiTinh").prop('selectedIndex');
	if (gioiTinh == 0) {
		document.getElementById("erGioiTinh").innerHTML = "Chưa chọn giới tính";
		status = 1;
	} else
		document.getElementById("erGioiTinh").innerHTML = "";

	// Số điện thoại
	var sdt = $("#sdt").val();
	if (sdt == "") {
		document.getElementById("erSdt").innerHTML = "Chưa nhập số điện thoại";
		status = 1;
	} else {
		var pattern = /^(\d{10,11})$/;
		var check = sdt.match(pattern);
		if (check == null) {
			document.getElementById("erSdt").innerHTML = "Số điện thoại không hợp lệ";
			status = 1;
		} else
			document.getElementById("erSdt").innerHTML = "";;
	}

	// Email
	var email = $("#email").val();
	if (email == "") {
		document.getElementById("erEmail").innerHTML = "Chưa nhập email";
		status = 1;
	} else {
		var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var check = email.match(pattern);
		if (check == null) {
			document.getElementById("erEmail").innerHTML = "Email không hợp lệ";
			status = 1;
		} else
			document.getElementById("erEmail").innerHTML = "";
	}

	// Địa chỉ
	var diaChi = $("#diaChi").val();
	if (diaChi == "") {
		document.getElementById("erDiaChi").innerHTML = "Chưa nhập địa chỉ";
		status = 1;
	} else {
		document.getElementById("erDiaChi").innerHTML = "";
	}

	// Xu ly phan mat khau
	var matKhau = $("#matKhau").val();
	var nhapLaiMatKhau = $("#nhapLaiMatKhau").val();
	if (matKhau == "") {
		document.getElementById("erMatKhau").innerHTML = "Chưa nhập mật khẩu";
		status = 1;
	}else{
		if(matKhau.length < 8){
			document.getElementById("erMatKhau").innerHTML = "Mật khẩu phải từ 8 ký tự trở lên";
			document.getElementById("erNhapLaiMatKhau").innerHTML = "";
			status = 1;
		}
		else
			document.getElementById("erMatKhau").innerHTML = "";
	}
	if (nhapLaiMatKhau == "") {
		document.getElementById("erNhapLaiMatKhau").innerHTML = "Chưa nhập lại mật khẩu";
		status = 1;
	}else{
		if(matKhau !== nhapLaiMatKhau){
			document.getElementById("erNhapLaiMatKhau").innerHTML = "Mật khẩu không khớp";
			document.getElementById("erNhapLaiMatKhau").innerHTML = "";
			status = 1;
		}
		else
			document.getElementById("erNhapLaiMatKhau").innerHTML = "";
	}
	

	if (status == 1)
		return false;

	return true;
}
