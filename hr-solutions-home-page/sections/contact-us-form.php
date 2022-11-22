<head>
    <link rel="stylesheet" href="styles/style-contact.css">
</head>

<div class="contact-container">
    <form action="#">
        <p class="touch-text fw-bold">
            Get in Touch
        </p>
        <div class="add-margin form-row">
            <div class="input-data">
                <input type="text" required>
                <div class="underline"></div>
                <label for="">First Name</label>
            </div>
            <div class="input-data">
                <input type="text" required>
                <div class="underline"></div>
                <label for="">Last Name</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="text" required>
                <div class="underline"></div>
                <label for="">Phone</label>
            </div>
            <div class="input-data">
                <input type="text" required>
                <div class="underline"></div>
                <label for="">Email</label>
            </div>
        </div>
        <div class="form-row">
            <!-- dropdown -->
            <div class="input-group">
                <select>
                    <option></option>
                    <option class="text-capitalize">A Developer</option>
                    <option class="text-capitalize">A Student</option>
                    <option class="text-capitalize">A Designer</option>
                </select>
                <label>You are</label>
                <div class="select-underline"></div>
            </div>
            <div class="input-data">
                <input type="text" required>
                <div class="underline"></div>
                <label for="">Subject</label>
            </div>
        </div>
        <div class="form-row">
            <div class="input-data">
                <input type="text" required>
                <div class="underline"></div>
                <label for="">Message</label>
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-row submit-btn">
                <div class="input-data">
                    <button type="button" class="submit-button btn btn-danger">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>


<script>
    $(function() {
        $('.input-group input').focusout(function() {
            var text_val = $(this).val();
            if (text_val === "") {
                $(this).removeClass('has-value');
            } else {
                $(this).addClass('has-value');
            }
        });

        $('.input-group select').focusout(function() {
            var text_val = $(this).children('option:selected').val();
            if (text_val === "") {
                $(this).removeClass('has-value');
            } else {
                $(this).addClass('has-value');
            }
        });
    });
</script>