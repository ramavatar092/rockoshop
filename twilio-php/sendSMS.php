// Include the Twilio autoload file
require_once 'twilio-php/src/Twilio/autoload.php';  // Path to the Twilio SDK
use Twilio\Rest\Client;

// Twilio credentials
$sid = 'AC0cd9abc5302b455197272aeaa2b34864';
$token = '0f511b87a41c2d71f4525ab9523223e7';
$twilioNumber = '+12569065722';

function sendSMS($to, $message) {
    global $sid, $token, $twilioNumber;

    // Initialize the Twilio client
    $client = new Client($sid, $token);

    try {
        // Send the message
        $client->messages->create(
            $to,
            [
                'from' => $twilioNumber,
                'body' => $message
            ]
        );
        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Example usage
sendSMS('+918447982556', 'Hello from Twilio!');
