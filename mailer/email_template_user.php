<?php
function generateEmailTemplate($type, $name, $email, $table = false, $tableData = [])
{
    global $domain, $sitename;
    // Detect system info (for login template)
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

    // Device type
    $deviceType = (preg_match('/mobile/i', $userAgent)) ? 'Mobile' : 'PC';

    // Browser & Version
    $browserType = 'Unknown';
    $browserVersion = '';
    if (preg_match('/Chrome\/([0-9\.]+)/i', $userAgent, $match)) {
        $browserType = 'Chrome';
        $browserVersion = $match[1];
    } elseif (preg_match('/Firefox\/([0-9\.]+)/i', $userAgent, $match)) {
        $browserType = 'Firefox';
        $browserVersion = $match[1];
    } elseif (preg_match('/Safari\/([0-9\.]+)/i', $userAgent, $match)) {
        $browserType = 'Safari';
        $browserVersion = $match[1];
    } elseif (preg_match('/Edg\/([0-9\.]+)/i', $userAgent, $match)) {
        $browserType = 'Edge';
        $browserVersion = $match[1];
    }

    // OS Detection
    $osType = 'Unknown';
    $osVersion = '';
    if (preg_match('/Windows NT ([0-9\.]+)/i', $userAgent, $match)) {
        $osType = 'Windows';
        $osVersion = $match[1];
    } elseif (preg_match('/Mac OS X ([0-9_]+)/i', $userAgent, $match)) {
        $osType = 'Mac OS';
        $osVersion = str_replace('_', '.', $match[1]);
    } elseif (preg_match('/Android ([0-9\.]+)/i', $userAgent, $match)) {
        $osType = 'Android';
        $osVersion = $match[1];
    } elseif (preg_match('/iPhone OS ([0-9_]+)/i', $userAgent, $match)) {
        $osType = 'iOS';
        $osVersion = str_replace('_', '.', $match[1]);
    }

    ob_start();
?>
    <div style="font-family: Arial, sans-serif; max-width:100%; margin:auto; border:1px solid #eee; padding:20px;">
        <div style="text-align:center; margin-bottom:20px;">
            <img src="<?php echo $domain ?>/static/globalfpmarkets/files/logo-main.4b9c545ea9347660b73dd3b00a629d43.png" alt="Site Logo" style="height:40px;">
        </div>
        <h2 style="color:#222;"><?= ucfirst($type) ?> Notification</h2>
        <p>Hey <?= htmlspecialchars($name) ?>,</p>

        <?php if ($type === "Customer Registeration") { ?>

            
            <p>
                We're thrilled to welcome you to <b><?= htmlspecialchars($sitename) ?></b>! 
                Your trading account linked to <b><?= htmlspecialchars($email) ?></b> has been set up successfully.
            </p>


            <p>

                Please note that your account is <strong> undergoing a verification review. </strong>
                Our team will inform you once this process is finalized, allowing you to start trading 
                with assurance on our platform.

                

            </p>

            <p>
                At <b><?= htmlspecialchars($sitename) ?></b>, we take immense pride in offering not just a platform, but a secure, user-friendly ecosystem for trading.<br><br>
                Our advanced suite of tools is designed to empower you, making it easier than ever to grow and manage your portfolio.<br><br>
                Whether you’re navigating through the exhilarating highs of the stock market or riding the waves of cryptocurrency trends, we’ve got you covered with resources tailored for success.
            </p>

            <p>
                Thank you for becoming a part of us.<br><br>
                This is your first step into a world of endless possibilities,<br>
                where exciting trading opportunities await at every turn.
            </p>

            




        <?php } elseif ($type === "login") { ?>
            <p>We noticed a recent login to your account.</p>
            <?php if ($table) { ?>
                <table style="width:100%; border-collapse:collapse; margin-top:15px;">
                    <tr>
                        <td style="border:1px solid #ddd; padding:8px; font-weight:bold;">Time</td>
                        <td style="border:1px solid #ddd; padding:8px;"><?= date("Y-m-d H:i:s") ?></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ddd; padding:8px; font-weight:bold;">IP Address</td>
                        <td style="border:1px solid #ddd; padding:8px;"><?= $ip ?></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ddd; padding:8px; font-weight:bold;">Device Type</td>
                        <td style="border:1px solid #ddd; padding:8px;"><?= $deviceType ?></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ddd; padding:8px; font-weight:bold;">Browser Type</td>
                        <td style="border:1px solid #ddd; padding:8px;"><?= $browserType ?></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ddd; padding:8px; font-weight:bold;">Browser Version</td>
                        <td style="border:1px solid #ddd; padding:8px;"><?= $browserVersion ?></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ddd; padding:8px; font-weight:bold;">OS Type</td>
                        <td style="border:1px solid #ddd; padding:8px;"><?= $osType ?></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ddd; padding:8px; font-weight:bold;">OS Version</td>
                        <td style="border:1px solid #ddd; padding:8px;"><?= $osVersion ?></td>
                    </tr>
                </table>
            <?php } ?>

        <?php } elseif ($type === "deposit") { ?>
            <p>Your deposit request was received. Details below:</p>

        <?php } elseif ($type === "withdrawal") { ?>
            <p>Your withdrawal request was received. Details below:</p>

        <?php } elseif ($type === "deposit_declined") { ?>
            <p style="color:red;">Your deposit was declined. Details below:</p>

        <?php } elseif ($type === "withdrawal_declined") { ?>
            <p style="color:red;">Your withdrawal was declined. Details below:</p>

        <?php } elseif ($type === "trading") { ?>
            <p>A new trading activity occurred on your account. Details below:</p>
        <?php } ?>

        <?php if ($table && !empty($tableData)) { ?>
            <table style="width:100%; border-collapse:collapse; margin-top:15px;">
                <?php foreach ($tableData as $key => $value) { ?>
                    <tr>
                        <td style="border:1px solid #ddd; padding:8px; font-weight:bold; text-transform:capitalize;"><?= str_replace("_", " ", $key) ?></td>
                        <td style="border:1px solid #ddd; padding:8px;text-transform:capitalize;"><?= htmlspecialchars($value) ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>

        <p style="margin-top:20px;">Thank you,<br>  <?php  echo $sitename  ?> </p>
    </div>
<?php
    return ob_get_clean();
}


// echo generateEmailTemplate("register", "Ezea", "ezea@example.com");
// echo generateEmailTemplate("deposit", "Ezea", "ezea@example.com", true, [
//     ["method" => "USDT (TRC20)", "account" => "Dogecoin Account", "amount" => "$5003", "transaction_id" => "WRX214459573", "status" => "Pending"]
// ]);

// $body =  generateEmailTemplate("login", "Ezea", "ezea@example.com", true);

// echo $body;