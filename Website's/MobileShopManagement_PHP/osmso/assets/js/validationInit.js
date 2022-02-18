function formValidation() {
    "use strict";
    /*----------- BEGIN validationEngine CODE -------------------------*/
    $('#popup-validation').validationEngine();
    /*----------- END validationEngine CODE -------------------------*/

    /*----------- BEGIN validate CODE -------------------------*/
    $('#inline-validate').validate({
        rules: {
            required: "required",
            email: {
                required: true,
                email: true
            },
            date: {
                required: true,
                date: true
            },
            url: {
                required: true,
                url: true
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            agree: "required",
            minsize: {
                required: true,
                minlength: 3
            },
            maxsize: {
                required: true,
                maxlength: 6
            },
            minNum: {
                required: true,
                min: 3
            },
            maxNum: {
                required: true,
                max: 16
            }
        },
        errorClass: 'help-block col-lg-6',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
    });


    $('#product-validate').validate({
        rules: {
            ProductName: "required",
			BrandName: "required",
			DisplaySize: "required",
			OperatingSystem: "required",
			CameraDescription: "required",
			BatteryLife: "required",
			Weight: "required",
			Model: "required",
			Dimension: "required",
			ASIN: "required",
			Processor: "required",
			InternalMemory: "required",
			RAM: "required",
			SupplierName: "required",
			SupplierPhone: "required",
			ClientName: "required",
			ClientPhone: "required",
			
			
            email2: {
                required: true,
                email: true
            },
			
            date2: {
                required: true,
                date: true
            },
           
		   ProductPrice: {
                required: true,
                digits: true
            },
			
			Quantity: {
                required: true,
                digits: true
            },
			Quantity2: {
                required: true,
                digits: true
            },
			Price: {
                required: true,
                digits: true
            },
			TotalPrice: {
                required: true,
                digits: true
            },
			TotalPrice2: {
                required: true,
                digits: true
            },
			
			SellingPrice: {
                required: true,
                digits: true,
				
            },
			AmountPaid: {
                required: true,
                digits: true,
				
            },
			Balance: {
                required: true,
                digits: true,
				
            },
           
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
		
		
    });
	
	 $('#Branch-validate').validate({
        rules: {
			Address:"required",
            
			BranchName: {
                required: true,
            },
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
		
		
    });
	 $('#Price-validate').validate({
        rules: {
            
			Product: {
                required: true,
            },
			Price: {
                required: true,
                digits: true
            },
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
		
		
    });
	 $('#ChangePassword-validate').validate({
        rules: {
            
			CurrentPassword: {
                required: true,
            },
			
			NewPassword: {
                required: true,
				minlength: 5,
                
            },
			ConfirmPassword: {
                required: true,
				minlength: 5,
                equalTo: "#NewPassword",
            },
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
		
		
    });
	 
	 $('#Profile-validate').validate({
        rules: {
            
			Names: {
                required: true,
            },
			Address: {
                required: true,                
            },
			Email: {
                required: true,
				email: true
            },
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
		
		
    });
	 
	$("#TotalPrice").focus(function() {
            var qty = $("#Quantity").val();
			var price = $("#ProductPrice").val();
				 if(qty && !this.value) {
                this.value = qty*price;
            }

        });
	
	$("#TotalPrice2").focus(function() {
            var qty2 = $("#Quantity2").val();
			var price2 = $("#Price").val();
				
                this.value = qty2*price2;
          

        });
	
	$("#Balance").focus(function() {
            var amtpaid = $("#AmountPaid").val();
			var tprice = $("#TotalPrice2").val();
				
                this.value = amtpaid-tprice;
          

        });
	
	$("#Quantity2").focusout(function()
	{
	
	var qtystore = $("#QuatityInStore").val();
	var qtysold = $("#Quantity2").val();
	
	if(qtystore < qtysold)
	{
		 $("#qtyerror").fadeIn();
	}
	else
	{
		 $("#qtyerror").fadeOut();
	}
	});
	
	
	
    /*----------- END validate CODE -------------------------*/
	
	$('#user-validate').validate({
        rules: {
            Names: "required",
			Address: "required", 
			Role: "required", 
			Branch: "required",
            email: {
                required: true,
                email: true
            },
            date2: {
                required: true,
                date: true
            },
            url2: {
                required: true,
                url: true
            },
			 UserName: {
                required: true,
                minlength: 5,
				maxlength: 20
            },
            Password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#Password"
            },
            agree2: "required",
            digits: {
                required: true,
                digits: true
            },
            range: {
                required: true,
                range: [5, 16]
            }
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
    });
    /*----------- END User Validate CODE -------------------------*/
}