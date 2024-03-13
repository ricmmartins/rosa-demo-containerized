<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PHP Application - Red Hat OpenShift</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <link rel="icon" href="https://raw.githubusercontent.com/ricmmartins/demo-php-app/main/openshift.ico" type="image/ico" >
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/ricmmartins/demo-php-app/main/openshift.ico" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
    <section class="congratulations">
        <h1>Congratulations!</h1>
        <p><em>Your Containerized PHP Application</em> is now running on your Red Hat OpenShift Service on AWS</p>
        <p>You are running PHP version <?= phpversion() ?></p>
	<p>This is v1 of the app</p>
    </section>

    <section class="instructions">
        <h2>What's Next?</h2>
        <ul>
            <li><a href="https://www.redhat.com/en/technologies/cloud-computing/openshift">OpenShift Overview</a></li>
            <li><a href="https://www.redhat.com/en/technologies/cloud-computing/openshift#cloud-services-editions">OpenShift Cloud Services Edition</a></li>
            <li><a href="https://www.redhat.com/en/technologies/cloud-computing/openshift#self-managed">OpenShift Self Managed Editions</a>
            <li><a href="https://docs.openshift.com/">OpenShift Documentation</a></li>
            <li><a href="https://www.redhat.com/en/technologies/cloud-computing/openshift/try-it">Try Red Hat OpenShift</a></li>
        </ul>
    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
