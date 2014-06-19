<script type="text/javascript">
$(document).ready(function() {
    $('#registration-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
});
</script>
<div class="container">
    <div class="col-lg-8 col-lg-offset-2">
        <form id="registration-form" method="post" action="register">
            <fieldset>
            <div class="form-group">
                <div class="input-group space-bt">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input type="text" class="form-control" name="email" placeholder="E-mail" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group space-bt">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group space-bt">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </div>
                    <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
                </div>
            </div>
            </fieldset>
            <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>