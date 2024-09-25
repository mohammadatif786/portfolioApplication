$(document).ready(function(){


    //This script send code and open modal to enter verification code
    $(".verifictionButton").on("click", function() {
        const formData = $("#verifyEmailFormData").serialize();
    
        $.ajax({
            url: '/admin/login/verify',
            type: 'GET',
            data: formData,
            success: function(response) {
                if (response.status === 'error'){
                                
                    toastr.error(response.message); 

                } else  {

                    $("#emailVerificationModal").html(response);
                    $("#emailVerificationModal").modal('show');
                
                }
            },
            error: function() {
                toastr.error('Please enter credentials for further process.');
            }
        });
    });
    
    //this script check verification code with user code
    $(document).on('click',"#verifyCode",function(){

        const formData = $("#verificationForm").serialize();
        const verificationCodeURL = $(this).data('verification-url')
        const dashboardUrl = $(this).data('dashboard-url');


        $.ajax({
            url:verificationCodeURL,
            type:'POST',
            data:formData,
            success:function(response){

                if(response.status === 'error'){
                   
                    toastr.error(response.message);
                
                }else{
                
                    toastr.success(response.message);

                    window.location.href = dashboardUrl;
                
                }
            }
        });
    });
});
