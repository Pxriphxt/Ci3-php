<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Car Information</title>
    <!-- Font icons -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/themify-icons/css/themify-icons.css'); ?>">
    <!-- Bootstrap main styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/work1.css'); ?>">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4 text-center">Car Information</h1>
        
        <!-- Back to Home Button -->
        <div class="text-center mb-4">
            <a href="<?= base_url(); ?>" class="btn btn-primary">Back to Home</a>
        </div>
        
        <!-- Table -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Lastname</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Registration</th>
                    <th>Color</th>
                    <th>Actions</th> <!-- เพิ่มคอลัมน์ Actions สำหรับ Edit และ Delete -->
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($cars)) : ?>
                    <?php foreach ($cars as $index => $car) : ?>
                        <tr>
                            <td><?= $index + 1; ?></td>
                            <td><?= $car['car_username']; ?></td>
                            <td><?= $car['car_userlname']; ?></td>
                            <td><?= $car['car_brand']; ?></td>
                            <td><?= $car['car_model']; ?></td>
                            <td><?= $car['car_registration']; ?></td>
                            <td><?= $car['car_color']; ?></td>
                            <td>
                                <a href="<?= base_url('cars/edit/'.$car['car_id']); ?>" class="btn btn-warning btn-sm">Edit</a> <!-- ลิงก์สำหรับการแก้ไข -->
                                <a href="<?= base_url('cars/delete/'.$car['car_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this car?');">Delete</a> <!-- ลิงก์สำหรับการลบ -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="8" class="text-center">No car information available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Link to Bootstrap JS (Optional for some components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0iX/66C/TsM3Tt7nC5aN6C1+ylXkQsJfJq5gacj6yqkeGsYd" crossorigin="anonymous"></script>
</body>
</html>
