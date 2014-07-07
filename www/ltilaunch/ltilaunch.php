<?php
$consumer_secret = '9f58e6b5ef1b02fe273a36ff8d53c1a5302a1601';
$consumer_key = '50435cba83c6dfb18185e239baa9c17b5263caca';
$blog = 2;
$ltiurl = 'http://192.168.33.10/api/lti/' . $blog;
$resource_link_id = '353288f929-123456';
$time = time();
$nonce = sha1($time);
echo "Time: $time<br />\n";

$oauth = new OAUTH($consumer_key, $consumer_secret);
$oauth->enableDebug();
$oauth->setNonce($nonce);
$oauth->setVersion('1.0');
$oauth->setTimestamp($time);
$oauth->setAuthType(OAUTH_AUTH_TYPE_NONE);
$params = array(
  "oauth_consumer_key" => $consumer_key,
  "resource_link_id" => $resource_link_id,
  "user_id" => "292832126",
  "roles" => "Instructor",
  "lis_person_name_full" => "Jane Q. Public",
  "lis_person_contact_email_primary" => "user@school.edu",
  "lis_person_sourced_id" => "school.edu:user",
  "context_id" => "456434513",
  "context_title" => "Design of Personal Environments",
  "context_label" => "SI182",
  "lti_version" => "LTI-1p0",
  "lti_message_type" => "basic-lti-launch-request",
  "tool_consumer_instance_guid" => "lmsng.school.edu",
  "tool_consumer_instance_description" => "University of School (LMSng)",
  "basiclti_submit" => "Press to continue to external tool.",
  "oauth_callback" => "about:blank",
);

$signature = $oauth->generateSignature(OAUTH_HTTP_METHOD_POST, $ltiurl, $params);
echo "Signature(1): $signature<br />\n";
echo "Nonce: $nonce<br />\n";
?>
<html>
<head>
</head>
<body>
<div id="ltiLaunchFormSubmitArea">
    <form action="<?php print $ltiurl; ?>" name="ltiLaunchForm" id="ltiLaunchForm" method="post" encType="application/x-www-form-urlencoded">
        <input type="hidden" name="oauth_version" value="1.0"/>
        <input type="hidden" name="oauth_nonce" value="<?php print $nonce ?>"/>
        <input type="hidden" name="oauth_timestamp" value="<?php print $time ?>"/>
        <input type="hidden" name="oauth_consumer_key" value="<?php print $consumer_key ?>"/>
        <input type="hidden" name="resource_link_id" value="<?php print $resource_link_id ?>"/>
        <input type="hidden" name="user_id" value="292832126"/>
        <input type="hidden" name="roles" value="Instructor"/>
        <input type="hidden" name="lis_person_name_full" value="Jane Q. Public"/>
        <input type="hidden" name="lis_person_contact_email_primary" value="user@school.edu"/>
        <input type="hidden" name="lis_person_sourced_id" value="school.edu:user"/>
        <input type="hidden" name="context_id" value="456434513"/>
        <input type="hidden" name="context_title" value="Design of Personal Environments"/>
        <input type="hidden" name="context_label" value="SI182"/>
        <input type="hidden" name="lti_version" value="LTI-1p0"/>
        <input type="hidden" name="lti_message_type" value="basic-lti-launch-request"/>
        <input type="hidden" name="tool_consumer_instance_guid" value="lmsng.school.edu"/>
        <input type="hidden" name="tool_consumer_instance_description" value="University of School (LMSng)"/>
        <input type="submit" name="basiclti_submit" value="Launch Endpoint with BasicLTI Data"/>
        <input type="hidden" name="oauth_signature_method" value="HMAC-SHA1"/>
        <input type="hidden" name="oauth_callback" value="about:blank"/>
        <input type="hidden" name="oauth_signature" value="<?php print $signature ?>"/>
    </form>
</div>
<script language="javascript">
    document.getElementById("ltiLaunchFormSubmitArea").style.display = "none";
    nei = document.createElement('input');
    nei.setAttribute('type', 'hidden');
    nei.setAttribute('name', 'basiclti_submit');
    nei.setAttribute('value', 'Press to continue to external tool.');
    document.getElementById("ltiLaunchForm").appendChild(nei);
    document.ltiLaunchForm.submit();
 </script>
</body>
</html>
<?php?>

