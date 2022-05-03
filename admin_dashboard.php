<?php
session_start();
include('server.php');

if (isset($_SESSION['email']) && !empty($_SESSION['email']))
{
    $email1 = $_SESSION['email'];
    include('includes/header.php');
?>
    <!-- body content start -->
    <div class="home-page container">
        <div class="row">
            <div class="col-md-12">
                <p class="monthly-summary">Today</p>
            </div>
            <div class="col-md-12 status-bar">
                <div class="row justify-content-center">
                    <div class="completed">
                        <label for=""><?php echo date('d'); ?></label>
                    </div>
                    <div class="pending">
                        <label for=""><?php echo date('m'); ?></label>
                    </div>
                    <div class="total">
                        <label for=""><?php echo date('Y'); ?></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mt-50">
            <div class="col-md-5 m-2 box">
                <div class="mt-4 mb-4 text-center">
                    <label class="d-flex">Upload Xls File</label>   
                    <input id="file_upload" type="file" class="form-control-image pd-image-upload-file float-left" name="xl-docs">
                    <button type="submit" name="submit" onclick="upload()" class="save-btn mt-5">Convert</button>
                </div>
            </div>
            <div class="col-md-6 m-2">
                <textarea id="json-result" style="display:none;width:100%;height:250px;"></textarea>
            </div>
        </div>
    </div>
    <!-- body contedt end -->
<?php
    include('includes/footer.php');
}
else
{
    header('Location: index.php'); //redirect URL      
}
?>