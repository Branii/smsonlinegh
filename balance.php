<?php
    
    require_once 'lib/Zenoph/Notify/AutoLoader.php';
    
    use Zenoph\Notify\Enums\AuthModel;
    use Zenoph\Notify\Request\CreditBalanceRequest;
    
    try {
        $request = new CreditBalanceRequest();
	
        $request->setHost("localhost");
        // $request->useSecureConnection(true);
        $request->setAuthModel(AuthModel::API_KEY);
        $request->setAuthApiKey('2a3484aa3f1ed0b75c119158a2a1a92989befdc44f7812e623aaa7e3be880138');
        $response = $request->submit();
        
        # get the balance
        $balance = $response->getBalance();
        
        echo "Balance is: {$balance}.";
    } 
    
    catch (\Exception $ex) {
        die ($ex->getMessage());
    }

