require_once "autoload.php";

use Web3\Web3;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;

$web3 = new Web3(new HttpProvider(new HttpRequestManager("YOUR_ETHEREUM_NODE_URL")));
$eth = $web3->eth;

$eth->blockNumber(function ($err, $blockNumber) {
    if ($err !== null) {
        echo "Error: " . $err->getMessage();
        return;
    }
    echo "Latest block number is: " . $blockNumber . "\n";
});
