var lastResult,
    countResults = 0;

function onScanSuccess(decodedText, decodedResult) {
    if (decodedText !== lastResult) {
        ++countResults;
        lastResult = decodedText;

        // Check if the decoded text contains the specified URL
        var targetURL =
            "https://siac-marseille.alan-thob.fr/" || "http://localhost/";
        if (decodedText.includes(targetURL)) {
            // Redirect the user to the decoded URL
            window.location.href = decodedText;
        } else {
            console.log(
                "Scan result does not contain the specified URL:",
                decodedText
            );
            alert(
                "Le QR Code scanné n'est pas supporté par l'application Mapollon."
            );
        }
    }
}

var html5QrcodeScanner = new Html5QrcodeScanner("qr-reader", {
    fps: 10,
    qrbox: 250,
});
html5QrcodeScanner.render(onScanSuccess);
