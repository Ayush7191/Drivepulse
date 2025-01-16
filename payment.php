<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Payment Form</title>
    <link rel="stylesheet" href="./assets/css/dp.css">
</head>
<body>
    <?php include'navbar.php'?>
    <?php include'about.php'?>

    <div class="payment-form">
        <h2>Payment Form</h2>
        <form id="paymentForm">
            <label for="paymentType">Select Payment Method:</label>
            <select id="paymentType" name="paymentType" required>
                <option value="">--Select Payment Method--</option>
                <option value="card">Credit/Debit Card</option>
                <option value="upi">UPI</option>
                <option value="netbanking">Net Banking</option>
                <option value="wallet">Wallet</option>
            </select>

            <!-- Dynamic Fields -->
            <div id="paymentFields">
                <!-- Fields will dynamically render here -->
            </div>

            <!-- Submit Button -->
            <button type="submit">Pay Now</button>
        </form>
    </div>
    <script src="script.js">
        const paymentType = document.getElementById('paymentType');
const paymentFields = document.getElementById('paymentFields');

paymentType.addEventListener('change', () => {
    const selectedType = paymentType.value;

    // Clear existing fields
    paymentFields.innerHTML = '';

    if (selectedType === 'card') {
        // Credit/Debit Card Fields
        paymentFields.innerHTML = `
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>
            
            <label for="cardExpiry">Expiry Date:</label>
            <input type="text" id="cardExpiry" name="cardExpiry" placeholder="MM/YY" required>
            
            <label for="cardCvv">CVV:</label>
            <input type="text" id="cardCvv" name="cardCvv" placeholder="123" required>
            
            <label for="cardName">Name on Card:</label>
            <input type="text" id="cardName" name="cardName" placeholder="John Doe" required>
        `;
    } else if (selectedType === 'upi') {
        // UPI Fields
        paymentFields.innerHTML = `
            <label for="upiId">UPI ID:</label>
            <input type="text" id="upiId" name="upiId" placeholder="example@upi" required>
        `;
    } else if (selectedType === 'netbanking') {
        // Net Banking Fields
        paymentFields.innerHTML = `
            <label for="bankName">Select Bank:</label>
            <select id="bankName" name="bankName" required>
                <option value="">--Select Bank--</option>
                <option value="hdfc">HDFC Bank</option>
                <option value="icici">ICICI Bank</option>
                <option value="sbi">State Bank of India</option>
                <option value="axis">Axis Bank</option>
            </select>
        `;
    } else if (selectedType === 'wallet') {
        // Wallet Fields
        paymentFields.innerHTML = `
            <label for="walletType">Select Wallet:</label>
            <select id="walletType" name="walletType" required>
                <option value="">--Select Wallet--</option>
                <option value="paytm">Paytm</option>
                <option value="phonepe">PhonePe</option>
                <option value="googlepay">Google Pay</option>
                <option value="amazonpay">Amazon Pay</option>
            </select>
        `;
    }
});

// Handle form submission (for demonstration only)
document.getElementById('paymentForm').addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Payment Successful!');
});

    </script>
</body>
</html>
