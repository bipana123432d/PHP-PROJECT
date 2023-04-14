<!DOCTYPE html>
<html>
<head>
    <title>Fee Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="syle.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">DEERWALK SIFAL SCHOOL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="fee.php"> Fee Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LEARN MORE</button>
        </form>
    </div>
</nav>

<div class="container mt-5">
    <h1 class="text-center mb-4">Fee Management System</h1>
    <form method="post" action="process.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="studentName">Student Name</label>
                <input type="text" class="form-control" id="studentName" name="studentName" required>
            </div>
            <div class="form-group col-md-6">
                <label for="feeAmount">Fee Amount</label>
                <input type="number" class="form-control" id="feeAmount" name="feeAmount" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="paymentDate">Payment Date</label>
                <input type="date" class="form-control" id="paymentDate" name="paymentDate" required>
            </div>
            <div class="form-group col-md-6">
                <label for="paymentMethod">Payment Method</label>
                <select class="form-control" id="paymentMethod" name="paymentMethod" required>
                    <option value="Cash">Cash</option>
                    <option value="Card">Card</option>
                    <option value="Cheque">Cheque</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="note">Note</label>
            <textarea class="form-control" id="note" name="note"></textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Paid">Paid</option>
                <option value="Pending">Pending</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
