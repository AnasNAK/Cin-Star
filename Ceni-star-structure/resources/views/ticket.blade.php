<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Ticket</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    .ticket {
        display: flex;
        flex-direction: row;
        max-width: 600px;
        background-color: grey;
        border-radius: 10px;
        padding: 20px;
        margin: 50px auto;
        font-family: Arial, sans-serif;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .content {
        flex: 1;
    }

    .header h1 {
        margin: 0;
        font-size: 24px;
        color: #333;
    }

    .info p {
        margin: 5px 0;
        font-size: 16px;
        color: #555;
    }

    .barcode {
        text-align: center;
        margin-top: 20px;
        /* You can style the barcode here */
    }

    .footer {
        flex: 1;
        padding-left: 20px;
        font-size: 14px;
        color: #666;
    }
</style>

<body>
    <div class="ticket bg-dark">
        <div class="content">
            <div class="header">
                <h1 class="text-white">Cinema Name</h1>
            </div>
            <div class="info">
                <p>Movie: Movie Title</p>
                <p>Time: Showtime</p>
                <p>Date: Date</p>
                <p>Seat: Seat Number</p>
            </div>
            <div class="barcode">
                <!-- Barcode image or representation goes here -->
            </div>
        </div>
        <div class="footer">
            <p>Ticket Price: Price</p>
            <div class="credit-card-chip-container columns-4">
                <img src="{{asset('/img/icons8-clapperboard-52.png') }}" alt="">
            </div>
            <p>Thank you for choosing Cinema Name!</p>

        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>