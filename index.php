<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" />
        <!-- <style>
             label.checkbox input{
                margin-top:-10px;
            }
        </style> -->
                <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> 
<form method="post" enctype='multipart/form-data' action="proses.php">
    <select id="multi-select-demo" multiple="multiple" name="pilihan[]">
                        <option selected value="jQuery">jQuery tutorial</option>
                        <option selected value="Bootstrap">Bootstrap Tips</option>
                        <option selected value="HTML">HTML</option>
                        <option value="CSS">CSS tricks</option>
                        <option value="angular">Angular JS</option>
                    </select>
    <button type="submit" name="submit">
        Simpan
    </button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#multi-select-demo').multiselect();
                });
            </script>
