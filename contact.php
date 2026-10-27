<?php 
// Include PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include "clientarea/private/shadow.php"; 
include "clientarea/private/tables.php"; 
$emailConfig = include 'clientarea/private/email_config.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<meta name="description" content="Get in touch with us. Report a bug, suggest a feature, or ask us anything.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
<link href="css/plugins.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --navy:#0a1628;--navy2:#0d1e38;
  --blue:#1a4fd6;
  --gold:#f5a623;--gold2:#ffbe4d;
  --white:#ffffff;--off:#f5f6fa;
  --muted:#64748b;--border:rgba(10,22,40,0.09);
  --fh:'Outfit',sans-serif;--fb:'Plus Jakarta Sans',sans-serif;
}
html{scroll-behavior:smooth}
body{font-family:var(--fb);background:var(--off);color:var(--navy);overflow-x:hidden}
a{text-decoration:none;color:inherit}

/* HERO */
.hero{background:var(--navy);position:relative;overflow:hidden;min-height:320px;display:flex;align-items:center}
.hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,0.055) 1px,transparent 1px);background-size:28px 28px;pointer-events:none}
.hero-circle{position:absolute;right:-160px;bottom:-160px;width:500px;height:500px;border:80px solid rgba(26,79,214,0.12);border-radius:50%;pointer-events:none}
.hero-circle2{position:absolute;left:-80px;top:-80px;width:280px;height:280px;border:50px solid rgba(245,166,35,0.07);border-radius:50%;pointer-events:none}
.hero-inner{position:relative;z-index:1;max-width:1200px;margin:0 auto;width:100%;padding:72px 5%}
.hero-tag{display:inline-flex;align-items:center;gap:7px;background:rgba(245,166,35,.1);border:1px solid rgba(245,166,35,.2);border-radius:100px;padding:4px 14px;font-family:var(--fh);font-size:11px;font-weight:600;color:var(--gold);letter-spacing:.6px;margin-bottom:20px}
.hero-tag-dot{width:6px;height:6px;border-radius:50%;background:var(--gold)}
.hero-h1{font-family:var(--fh);font-size:clamp(36px,5vw,60px);font-weight:900;letter-spacing:-3px;line-height:.95;color:#fff;margin-bottom:16px}
.hero-h1 span{color:var(--gold)}
.hero-sub{font-size:15px;font-weight:300;color:rgba(255,255,255,.45);line-height:1.75;max-width:480px}

/* FORM SECTION */
.form-section{max-width:1200px;margin:0 auto;padding:52px 5% 60px}
.form-card{background:var(--white);border-radius:20px;border:1.5px solid var(--border);overflow:hidden;box-shadow:0 8px 40px rgba(10,22,40,.07)}

/* Card header */
.form-card-top{background:var(--navy2);padding:24px 32px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px}
.form-card-title{font-family:var(--fh);font-size:16px;font-weight:700;color:#fff;display:flex;align-items:center;gap:10px}
.form-card-title::before{content:'✉';font-size:16px}
.chip-row{display:flex;gap:8px;flex-wrap:wrap}
.chip{padding:6px 15px;border-radius:100px;font-family:var(--fh);font-size:11px;font-weight:600;border:1.5px solid rgba(255,255,255,.15);background:transparent;color:rgba(255,255,255,.5);cursor:pointer;transition:all .18s}
.chip:hover{border-color:rgba(255,255,255,.5);color:#fff}
.chip.active{background:var(--gold);border-color:var(--gold);color:var(--navy)}

/* Form body */
.form-body{padding:32px}
.form-grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:18px;margin-bottom:18px}
.fg{display:flex;flex-direction:column;gap:6px}
.fg-2{grid-column:span 2}
.fg-3{grid-column:span 3}
label{font-family:var(--fh);font-size:10px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--muted)}
.req{color:var(--gold)}
input[type=text],input[type=email],input[type=tel],textarea,select{font-family:var(--fb);font-size:14px;border:1.5px solid var(--border);border-radius:10px;padding:11px 14px;background:var(--off);color:var(--navy);outline:none;width:100%;transition:border-color .18s,box-shadow .18s;appearance:none;-webkit-appearance:none}
input:focus,textarea:focus,select:focus{border-color:var(--blue);box-shadow:0 0 0 3px rgba(26,79,214,.07);background:var(--white)}
textarea{min-height:120px;resize:vertical;line-height:1.65}
.select-wrap{position:relative}
.select-wrap::after{content:'▾';position:absolute;right:13px;top:50%;transform:translateY(-50%);font-size:12px;color:var(--muted);pointer-events:none}
select{padding-right:34px;cursor:pointer}
.phone-wrap{position:relative}
.phone-wrap input{padding-left:14px}
.url-wrap{position:relative}
.url-wrap input{padding-left:14px}
.field-hint{font-size:11px;color:var(--muted);margin-top:4px;font-style:italic}

/* Business toggle */
.biz-toggle-group{margin-bottom:0}
.toggle-row{display:flex;gap:8px;margin-top:4px}
.tog-btn{padding:9px 18px;border-radius:10px;font-family:var(--fh);font-size:12px;font-weight:700;border:1.5px solid var(--border);background:var(--off);color:var(--muted);cursor:pointer;transition:all .18s}
.tog-btn:hover{border-color:var(--navy);color:var(--navy)}
.tog-btn.active{background:var(--navy);border-color:var(--navy);color:#fff}
#bizFields{transition:max-height .35s ease,opacity .3s;max-height:200px;opacity:1;overflow:hidden}
#bizFields.hidden{max-height:0;opacity:0;pointer-events:none}
.no-biz-note{display:none;align-items:center;gap:10px;background:rgba(100,116,139,.06);border:1.5px solid var(--border);border-radius:10px;padding:12px 16px;font-size:13px;color:var(--muted);line-height:1.5;grid-column:span 3}
.no-biz-note.show{display:flex}

/* Form footer */
.form-footer{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;padding:20px 32px 28px;border-top:1.5px solid var(--border);background:var(--off)}
.btn-send{background:var(--gold);color:var(--navy);font-family:var(--fh);font-size:14px;font-weight:800;padding:14px 32px;border-radius:100px;border:none;cursor:pointer;display:inline-flex;align-items:center;gap:9px;transition:transform .2s,box-shadow .2s;letter-spacing:.3px}
.btn-send:hover{transform:translateY(-3px);box-shadow:0 12px 28px rgba(245,166,35,.35)}
.btn-send:active{transform:scale(.98)}
.btn-send svg{transition:transform .2s}
.btn-send:hover svg{transform:translateX(4px)}
.send-note{font-size:12px;color:var(--muted);display:flex;align-items:center;gap:6px}

/* Responsive */
@media(max-width:768px){
  .form-grid{grid-template-columns:1fr}
  .fg-2,.fg-3{grid-column:span 1}
  .form-body{padding:20px}
  .form-footer{padding:16px 20px 24px}
  .form-card-top{padding:18px 20px}
}
</style>
</head>
<body>
<?php include 'header.php'; ?>

<!-- HERO -->
<div class="hero">
  <div class="hero-circle"></div>
  <div class="hero-circle2"></div>
  <div class="hero-inner">
    <div class="hero-tag"><span class="hero-tag-dot"></span>Support &amp; Feedback</div>
    <h1 class="hero-h1">Contact <span>Us</span></h1>
    <p class="hero-sub">Have a question, spotted a bug, or want to suggest a feature? We'd love to hear from you.</p>
  </div>
</div>

<!-- FORM SECTION -->
<div class="form-section">
  <div class="form-card">
<form method="POST">
    <!-- Card header: title + inquiry chips -->
    <div class="form-card-top">
      <div class="form-card-title">Send a Message</div>
      <div class="chip-row">
        <button type="button" class="chip active" onclick="selectChip(this,'Bug Report')">🐛 Bug Report</button>
        <button type="button" class="chip" onclick="selectChip(this,'Feature Request')">💡 Feature Request</button>
        <button type="button" class="chip" onclick="selectChip(this,'API &amp; Integrations')">🔗 API &amp; Integrations</button>
        <button type="button" class="chip" onclick="selectChip(this,'Billing')">💳 Billing</button>
        <button type="button" class="chip" onclick="selectChip(this,'General Inquiry')">💬 General Inquiry</button>
      </div>
    </div>

    <!-- THE FORM -->
    

      <!-- Hidden: captures selected chip value -->
      <input type="hidden" name="inquiry_type" id="inquiryType" value="Bug Report">

      <div id="formArea">
        <div class="form-body">

          <!-- Row 1: First / Last / Phone -->
          <div class="form-grid">
            <div class="fg">
              <label>First Name <span class="req">*</span></label>
              <input type="text" name="fname" placeholder="Alex" required>
            </div>
            <div class="fg">
              <label>Last Name <span class="req">*</span></label>
              <input type="text" name="lname" placeholder="Johnson" required>
            </div>
            <div class="fg">
              <label>Phone Number</label>
              <div class="phone-wrap">
                <input type="tel" name="mobile" placeholder="Enter phone number">
              </div>
            </div>
          </div>

          <!-- Row 2: Email + Business toggle -->
          <div class="form-grid">
            <div class="fg fg-2">
              <label>Email Address <span class="req">*</span></label>
              <input type="email" name="email" placeholder="alex@example.com" required>
            </div>
            <div class="fg biz-toggle-group">
              <label>Representing a business?</label>
              <div class="toggle-row">
                <button type="button" class="tog-btn active" id="bizYes" onclick="setBiz(true)">✅ Yes</button>
                <button type="button" class="tog-btn" id="bizNo" onclick="setBiz(false)">🙋 No</button>
              </div>
            </div>
          </div>

          <!-- Business fields (shown by default) -->
          <div id="bizFields">
            <div class="form-grid">
              <div class="fg">
                <label>Business Name</label>
                <input type="text" name="business_name" placeholder="e.g. Acme Pvt. Ltd.">
              </div>
              <div class="fg">
                <label>Type of Business</label>
                <div class="select-wrap">
                  <select name="business_type">
                    <option value="">Select industry</option>
                    <option>Finance &amp; Accounting</option>
                    <option>Real Estate</option>
                    <option>E-commerce</option>
                    <option>Education</option>
                    <option>Healthcare</option>
                    <option>Technology / SaaS</option>
                    <option>Manufacturing</option>
                    <option>Retail</option>
                    <option>Other</option>
                  </select>
                </div>
              </div>
              <div class="fg">
                <label>Website URL</label>
                <div class="url-wrap">
                  <input type="text" name="weburl" placeholder="https://yourwebsite.com">
                </div>
                <p class="field-hint">Leave blank if you don't have one.</p>
              </div>
            </div>
          </div>

          <!-- No-business note (hidden by default) -->
          <div class="form-grid" id="noBizRow" style="display:none">
            <div class="no-biz-note show">
              <span>👤</span>
              <span>No problem — you're reaching out as an individual. Just add your message below.</span>
            </div>
          </div>

          <!-- Message -->
          <div class="form-grid">
            <div class="fg fg-3">
              <label>Message <span class="req">*</span></label>
              <textarea name="message" placeholder="Describe your question or issue in detail. If reporting a bug, include steps to reproduce it." required></textarea>
            </div>
          </div>

        </div><!-- end .form-body -->

        <!-- Form footer with submit -->
        <div class="form-footer">
          <button class="btn-send" type="submit" name="submit_form" value="1">
            Send Message
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><path d="M2 7.5h11M7.5 2l5.5 5.5-5.5 5.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <p class="send-note">
            <svg width="13" height="13" viewBox="0 0 13 13" fill="none"><circle cx="6.5" cy="6.5" r="5.5" stroke="#64748b" stroke-width="1.2"/><path d="M6.5 6v3M6.5 4.5v.5" stroke="#64748b" stroke-width="1.4" stroke-linecap="round"/></svg>
            We reply within one business day. Fields marked <span style="color:var(--gold);font-weight:700">*</span> are required.
          </p>
        </div>

      </div><!-- end #formArea -->

    </form><!-- end form -->

  </div><!-- end .form-card -->
</div><!-- end .form-section -->

<?php include 'footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
<script src="clientarea/assets/js/sweetalert.min.js"></script>

<?php if(isset($_GET['success'])): ?>
<script>
window.addEventListener('load', function(){
  swal({
    title: "Message Sent!",
    text: "Your enquiry has been submitted successfully. We'll get back to you within one business day.",
    icon: "success",
    button: "OK"
  });
});
</script>
<?php endif; ?>

<?php if(isset($_GET['failed'])): ?>
<script>
window.addEventListener('load', function(){
  swal({
    title: "Submission Failed",
    text: "Something went wrong. Please try again or contact us directly.",
    icon: "error",
    button: "Try Again"
  });
});
</script>
<?php endif; ?>

<script>
// Set active chip and update hidden input
function selectChip(el, value) {
  document.querySelectorAll('.chip').forEach(function(c){ c.classList.remove('active'); });
  el.classList.add('active');
  document.getElementById('inquiryType').value = value;
}

// Show/hide business fields
function setBiz(yes) {
  document.getElementById('bizYes').classList.toggle('active', yes);
  document.getElementById('bizNo').classList.toggle('active', !yes);
  document.getElementById('bizFields').classList.toggle('hidden', !yes);
  document.getElementById('noBizRow').style.display = yes ? 'none' : 'grid';

  if(!yes){
    // Clear business fields when "No" is selected
    var bf = document.getElementById('bizFields');
    bf.querySelectorAll('input').forEach(function(i){ i.value = ''; });
    bf.querySelectorAll('select').forEach(function(s){ s.selectedIndex = 0; });
  }
}
</script>
</body>
</html>
<?php
if(isset($_POST['submit_form'])){
$get_contact_id = $anjan->prepare("SELECT max(id) FROM contact_us");
$get_contact_id->execute();
$contact_id = $get_contact_id->fetch(PDO::FETCH_ASSOC);

if ($contact_id['max(id)'] > 0) {
    $n = $contact_id['max(id)'] + 1;
    $contact_id = 'CNT0' . $n;
} else {
    $contact_id = 'CNT01';
}
   
        $first_name    = htmlspecialchars(trim($_POST['fname']));
        $last_name     = htmlspecialchars(trim($_POST['lname']));
        $business_name = htmlspecialchars(trim($_POST['business_name']));
        $business_type = htmlspecialchars(trim($_POST['business_type']));
        $weburl        = htmlspecialchars(trim($_POST['weburl']));
        $mobile        = htmlspecialchars(trim($_POST['mobile']));
        $email         = htmlspecialchars(trim($_POST['email']));
        $inquiry_type  = htmlspecialchars(trim($_POST['inquiry_type']));
        $message       = htmlspecialchars(trim($_POST['message']));

        $added_date = date('Y-m-d');
        $added_time = date('H:i:s');

        $insert = $anjan->prepare("
            INSERT INTO contact_us(
                contact_id,
                first_name,
                last_name,
                business_name,
                business_type,
                weburl,
                mobile,
                email,
                inquiry_type,
                message,
                added_date,
                added_time
            )
            VALUES(
                :contact_id,
                :first_name,
                :last_name,
                :business_name,
                :business_type,
                :weburl,
                :mobile,
                :email,
                :inquiry_type,
                :message,
                :added_date,
                :added_time
            )
        ");

        $insert->bindParam(':contact_id',$contact_id);
        $insert->bindParam(':first_name',$first_name);
        $insert->bindParam(':last_name',$last_name);
        $insert->bindParam(':business_name',$business_name);
        $insert->bindParam(':business_type',$business_type);
        $insert->bindParam(':weburl',$weburl);
        $insert->bindParam(':mobile',$mobile);
        $insert->bindParam(':email',$email);
        $insert->bindParam(':inquiry_type',$inquiry_type);
        $insert->bindParam(':message',$message);
        $insert->bindParam(':added_date',$added_date);
        $insert->bindParam(':added_time',$added_time);
  $insert->execute();
   if($insert){
        // Prepare HTML email
        $body = '
        <h2>Contact Form Submission</h2>
        <table border="1" cellpadding="10" cellspacing="0" style="border-collapse:collapse; width:100%;">
    <tr>
        <th align="left">Contact ID</th>
        <td>'.$contact_id.'</td>
    </tr>

    <tr>
        <th align="left">First Name</th>
        <td>'.$first_name.'</td>
    </tr>

    <tr>
        <th align="left">Last Name</th>
        <td>'.$last_name.'</td>
    </tr>

    <tr>
        <th align="left">Business Name</th>
        <td>'.$business_name.'</td>
    </tr>

    <tr>
        <th align="left">Business Type</th>
        <td>'.$business_type.'</td>
    </tr>

    <tr>
        <th align="left">Website URL</th>
        <td>'.$weburl.'</td>
    </tr>

    <tr>
        <th align="left">Mobile Number</th>
        <td>'.$mobile.'</td>
    </tr>

    <tr>
        <th align="left">Email</th>
        <td>'.$email.'</td>
    </tr>

    <tr>
        <th align="left">Inquiry Type</th>
        <td>'.$inquiry_type.'</td>
    </tr>

    <tr>
        <th align="left">Message</th>
        <td>'.$message.'</td>
    </tr>

    <tr>
        <th align="left">Added Date</th>
        <td>'.$added_date.'</td>
    </tr>

    <tr>
        <th align="left">Added Time</th>
        <td>'.$added_time.'</td>
    </tr>
</table>';

        // Send email via PHPMailer
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host       = $emailConfig['host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $emailConfig['username'];
        $mail->Password   = $emailConfig['password'];
        $mail->SMTPSecure = $emailConfig['secure'];
        $mail->Port       = $emailConfig['port'];

        $mail->setFrom($emailConfig['from_email'], $emailConfig['from_name']);
        $mail->addAddress($emailConfig['receiver']);
        $mail->addReplyTo($email, $first_name);

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission - Searchinteriors';
        $mail->Body    = $body;

        $mail->send();

        // Redirect or success message
        echo "<script>swal('Thank You!', 'Your message has been sent.', 'success');</script>";
    } else {
        echo "<script>swal('Failed!', 'Form submission failed.', 'error');</script>";
    }

}
?>