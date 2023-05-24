<?php
/*
Template Name: sync
*/
?>
<?php
// data yang diambil
$table = array('client', 'method', 'client_method');
//var_dump($table); exit;
$wpdb->query('BEGIN TRANSACTION');

foreach ($table as $v) {
    $rows = request($v);
    if ($v == 'client') {
        $ok = insert_client($rows);
    } else if ($v == 'method') {
        $ok = insert_method($rows);
    } else if ($v == 'client_method') {
        $ok = insert_client_method($rows);
    }
}

if ($ok) {
    echo 'Data berhasil diupdate';
} else {
    echo $wpdb->last_error;
    echo 'Data gagal diupdate <br>';
}

$wpdb->query($ok ? 'COMMIT' : 'ROLLBACK');


// fungsi request
function request($table)
{
    $url = 'https://portal.sevimapay.com/apims/' . $table . '.php';
    $param = [
        'http' => [
            'method' => 'GET',
            'header' => 'Token: ' . md5('S' . date('Ymd') . 'P')
        ]
    ];
    $context = stream_context_create($param);

    $data = file_get_contents($url, false, $context);

    if (empty($data))
        return false;
    else
        return json_decode($data, true);
}

function insert_client($data)
{
    global $wpdb;
    foreach ($data as $row) {
        $client_id = $row['client_id'];
        $client_name = $row['client_name'];

        $sql = "SELECT * FROM sp_client WHERE client_id = '$client_id'";
        $result = $wpdb->get_results($sql);

        if (empty($result)) {
            // Prepare statement to insert data
            $prepare = $wpdb->prepare("INSERT INTO sp_client (client_id, client_name) VALUES (%s, %s)", $client_id, $client_name);

            // Execute the query
            $wpdb->query($prepare);


        } else {
            // If no change continue
            if ($result[0]->client_name == $client_name) {
                // echo "No change <br>";
                continue;
            }

            $prepare = $wpdb->prepare("UPDATE sp_client SET client_name = %s WHERE client_id = %s", $client_name, $client_id);
        }
        $result = $wpdb->query($prepare);

        if (!$result) {
            return false;
        }
    }
    return true;
}

function insert_method($data)
{
    global $wpdb;
    foreach ($data as $row) {
        $method_id = $row['method_id'];
        $method_name = $row['method_name'];
        $information = $row['information'];

        $sql = "SELECT * FROM sp_method WHERE method_id = '$method_id'";
        $result = $wpdb->get_results($sql);

        if (empty($result)) {

            $prepare = $wpdb->prepare("INSERT INTO sp_method (method_id, method_name, information) VALUES (%s, %s, %s)", $method_id, $method_name, $information);

            // $sql = "INSERT INTO sp_method (method_id, method_name, information) VALUES ('$method_id', '$method_name', '$information')";
        } else {
            // If no change continue
            if ($result[0]->method_name == $method_name && $result[0]->information == $information) {
                // echo "No change <br>";
                continue;
            }

            $prepare = $wpdb->prepare("UPDATE sp_method SET method_name = %s, information = %s WHERE method_id = %s", $method_name, $information, $method_id);

            // $sql = "UPDATE sp_method SET method_name = '$method_name', information = '$information' WHERE method_id = '$method_id'";
        }
        if (!$wpdb->query($prepare)) {
            return false;
        }
    }
    return true;
}

function insert_client_method($data)
{
    global $wpdb;
    foreach ($data as $row) {
        $client_id = $row['client_id'];
        $method_id = $row['method_id'];
        $information = $row['information'];

        $sql = "SELECT * FROM sp_client_method WHERE client_id = '$client_id' AND method_id = '$method_id'";
        $result = $wpdb->get_results($sql);

        if (empty($result)) {

            $prepare = $wpdb->prepare("INSERT INTO sp_client_method (client_id, method_id, information) VALUES (%s, %s, %s)", $client_id, $method_id, $information);
            // $sql = "INSERT INTO sp_client_method (client_id, method_id, information) VALUES ('$client_id', '$method_id', '$information')";
        } else {
            // If no change continue
            if ($result[0]->information == $information) {
                // echo "No change <br>";
                continue;
            }

            $prepare = $wpdb->prepare("UPDATE sp_client_method SET information = %s WHERE client_id = %s AND method_id = %s", $information, $client_id, $method_id);
            // $sql = "UPDATE sp_client_method SET information = '$information' WHERE client_id = '$client_id' AND method_id = '$method_id'";
        }
        if (!$wpdb->query($prepare)) {
            return false;
        }
    }
    return true;
}