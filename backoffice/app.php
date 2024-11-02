<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Form</title>
  <?php
    include "../include/cssHeader.php";
    $app_name = @$_POST['app_name'];
    if($app_name){
    //    check if logo uploaded
        if(isset($_FILES['logo'])){
            $logo = $_FILES['logo']['name'];
            $tmp = $_FILES['logo']['tmp_name'];
            $path = "../assets/img/".$logo;
            move_uploaded_file($tmp, $path);
        }else{
            $logo = '';
        }
        $app_name = $_POST['app_name'];
        $description = $_POST['description'];
        $email = $_POST['email'];
        $gizi = $_POST['gizi'];
        $tutorial = $_POST['tutorial'];
        $query = mysqli_query($connect, "UPDATE sites set logo='$logo' , app_name='$app_name', description='$description', email='$email', gizi='$gizi', tutorial='$tutorial' where id=1");
        if($query){
            echo "<script>alert('Data berhasil disimpan');window.location.href='app.php'</script>";
        }else{
            echo "<script>alert('Data gagal disimpan')</script>";
        }
    }
    ?>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col md:flex-row">
<?php
    include "../include/sidebar.php";
?>
<!-- Main Content Area -->
<div class="flex-1 flex flex-col ">
    <?php
        include "../include/header.php";
    ?>
     <!-- Main Dashboard Content -->
     <main class="flex-1 p-6">
        <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-center text-gray-800">App Form</h2>

            <!-- Form Fields -->
            <form class="mt-6 space-y-4" method='post' action=''>

                <!-- Logo Upload -->
                <div>
                    <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                    <input type="file" id="logo" name='logo' name="logo" accept="image/*" class="w-full p-2 mt-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- App Name -->
                <div>
                    <label for="app_name" class="block text-sm font-medium text-gray-700">App Name</label>
                    <input type="text" id="app_name" value='<?= $app['app_name'] ?>' name="app_name" class="w-full p-2 mt-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter app name">
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="3" class="w-full p-2 mt-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter description"><?= $app['description'] ?></textarea>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" value='<?= $app['email'] ?>' name="email" class="w-full p-2 mt-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter contact email">
                </div>

                <!-- Gizi (CKEditor) -->
                <div>
                    <label for="gizi" class="block text-sm font-medium text-gray-700">Gizi</label>
                    <textarea id="gizi" name="gizi" class="ckeditor mt-2 w-full h-80 border border-gray-300 rounded focus:outline-none"><?= $app['gizi'] ?></textarea>
                </div>

                <!-- Tutorial (CKEditor) -->
                <div>
                    <label for="tutorial" class="block text-sm font-medium text-gray-700">Tutorial</label>
                    <textarea id="tutorial" name="tutorial" class="ckeditor mt-2 w-full h-80 border border-gray-300 rounded focus:outline-none"><?= $app['tutorial'] ?></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="w-full py-3 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Submit
                    </button>
                </div>
            
            </form>
        </div>
    </main>
  </div>
</div>
<?php
    include "../include/footer.php";
?>
  <!-- CKEditor Initialization Script -->
  <script>
    // Initialize CKEditor for both 'gizi' and 'tutorial' textareas
    ClassicEditor
    .create(document.querySelector('#gizi'))
    .then(editor => {
        // Set a fixed height for the editable area
        editor.ui.view.editable.element.style.height = "200px";
        editor.ui.view.editable.element.style.overflow = "auto"; // Ensures scroll for overflow content
    })
    .catch(error => console.error(error));

    ClassicEditor
    .create(document.querySelector('#tutorial'))
    .then(editor => {
        // Set a fixed height for the editable area
        editor.ui.view.editable.element.style.height = "200px";
        editor.ui.view.editable.element.style.overflow = "auto";
    })
    .catch(error => console.error(error));

    ClassicEditor
    .create(document.querySelector('#description'))
    .then(editor => {
        // Set a fixed height for the editable area
        editor.ui.view.editable.element.style.height = "200px";
        editor.ui.view.editable.element.style.overflow = "auto";
    })
    .catch(error => console.error(error));

  </script>
    
</body>
</html>
