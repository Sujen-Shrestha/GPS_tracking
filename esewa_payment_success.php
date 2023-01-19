<?php
include 'database.php';
if (
      isset($_REQUEST['oid']) &&
      isset($_REQUEST['amt']) &&
      isset($_REQUEST['refId'])
) {
      $sql = "SELECT * FROM orders WHERE invoice_no = '" . $_REQUEST['oid'] . "'";
      $result = mysqli_query($con, $sql);
      if ($result) {


            if (mysqli_num_rows($result) == 1) {
                  $order = mysqli_fetch_assoc($result);
                  $url = "https://uat.esewa.com.np/epay/transrec";

                  $data = [
                        'amt' => $order['total'],
                        'rid' =>  $_REQUEST['refId'],
                        'pid' =>  $order['invoice_no'],
                        'scd' => 'epay_payment'
                  ];

                  $curl = curl_init($url);
                  curl_setopt($curl, CURLOPT_POST, true);
                  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                  $response = curl_exec($curl);
                  $response_code = get_xml_node_value('response_code', $response);

                  if (trim($response_code)  == 'Success') {
                        $sql = "UPDATE orders SET status=1 WHERE id='" . $order['id'] . "'";
                        mysqli_query($con, $sql);
                        header('location:main.php?error=payment_s');
                  }
            }
      }
}


function get_xml_node_value($node, $xml)
{
      if ($xml == false) {
            return false;
      }
      $found = preg_match('#<' . $node . '(?:\s+[^>]+)?>(.*?)' .
            '</' . $node . '>#s', $xml, $matches);
      if ($found != false) {

            return $matches[1];
      }

      return false;
}
