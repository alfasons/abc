-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 01:52 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `other_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `other_info`) VALUES
(1, 'what is SMS?', 'Short Message Service', 'yeap'),
(2, 'what is  abcdr', 'its bla bla bla', '432'),
(3, 'whats the code for DLR', 'check our doc', '432'),
(4, 'what is ur name?', 'my name is kipchirchir', 'kvjnfd'),
(5, 'Instruction for Sending messages..', 'do this then do this', 'jdhj'),
(6, 'Instruction for Sending messages..', '	\r\nThis is how i added the icon with text field. Also added the image of generated output. I don''t want to use Krajee \r\nYii Extensions. So i started to read the documentation.\r\n', '-'),
(7, 'Instruction for Sending messages..', 'xz', '');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1479290246),
('m130524_201442_init', 1479290280);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(255) NOT NULL,
  `page_url_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `otherinfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_url_name`, `title`, `subject`, `content`, `otherinfo`) VALUES
(1, 'MTECH API', 'Message Api', 'Messaging.', '<p class="fr-text-gray" style="margin-left: 120px;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif;"><span style="font-size: 36px;"><u>MTECH APIS : TECHNICAL <u>SPECIFICATION</u><br>&nbsp;</u></span></span></span></p><p>Messages can be sent via one of the two methods:</p><p>1. &nbsp; HTTP MESSAGE SENDING</p><p>2. &nbsp; SMPP MESSAGE SENDING</p><p><strong>HTTP MESSAGE SENDING</strong></p><p>The Mtech Messaging API is so simple to use.</p><p>All you need to do is invoke the API with the parameters via POST or GET and the request is queued on our system for pushing to the operator.</p><p>You will require account credentials to be used to authenticate against the API when sending out the message.</p><p><strong>PARAMETER DESCRIPTION</strong></p><table border="1" cellpadding="0" cellspacing="0" width="667"><tbody><tr><td valign="top" width="97">Parameter<br></td><td valign="top" width="342">Description<br></td><td valign="top" width="108">Type<br></td><td valign="top" width="120">Length<br></td></tr><tr><td valign="top" width="97">User**<br></td><td valign="top" width="342">Username as created and shared by an Mtech admin<br></td><td valign="top" width="108">string<br></td><td valign="top" width="120"><br></td></tr><tr><td valign="top" width="97">Pass**<br></td><td valign="top" width="342">Password as created and shared by an Mtech admin<br></td><td valign="top" width="108">string<br></td><td valign="top" width="120"><br></td></tr><tr><td valign="top" width="97">MESSAGE**<br></td><td valign="top" width="342">The message content<br></td><td valign="top" width="108">text<br></td><td valign="top" width="120">1-1000<br></td></tr><tr><td valign="top" width="97">MSISDN**<br></td><td valign="top" width="342">Recipient&rsquo;s mobile number.<br>Should be in the international number format without the leading + eg 254722000000<br></td><td valign="top" width="108"><br></td><td valign="top" width="120"><br></td></tr><tr><td valign="top" width="97">shortCode**<br></td><td valign="top" width="342">The sender Address.<br></td><td valign="top" width="108">Var char<br></td><td valign="top" width="120">4-8<br></td></tr><tr><td valign="top" width="97">messageID<br></td><td valign="top" width="342">Your reference ID. Necessary when you want to be get a delivery report<br></td><td valign="top" width="108">string<br></td><td valign="top" width="120"><br></td></tr><tr><td valign="top" width="97">linkID &nbsp; &nbsp;<br></td><td valign="top" width="342">This is required for on?demand services<br></td><td valign="top" width="108"><br></td><td valign="top" width="120"><br></td></tr></tbody></table><p>NOTE. Fields marked with &ldquo;*&rdquo; are mandatory.</p><p>The request should be submitted to the MTECH HTTP API URL</p><p><a href="http://ke.mtechcomm.com/bulkSMSV2/"></a><a href="http://ke.mtechcomm.com/bulkSMSV2/">http://ke.mtechcomm.com/bulkSMSV2/</a></p><p>example</p><p>curl i <a href="http://ke.mtechcomm.com/bulkAPIV2/?user=demoUser&pass=demoPassword&message%20ID=msgID&shortCode=DEMOSOURCEADDR&MSISDN=254722000000&MESSAGE=Thi%20s+is+an+Mtech+API+test+Message"></a><a href="http://ke.mtechcomm.com/bulkAPIV2/?user=demoUser&pass=demoPassword&message">http://ke.mtechcomm.com/bulkAPIV2/?user=demoUser&amp;pass=demoPassword&amp;message</a> ID=msgID&amp;shortCode=DEMOSOURCEADDR&amp;MSISDN=254722000000&amp;MESSAGE=Thi s+is+an+Mtech+API+test+Message</p><p><strong>Sample Response</strong></p><p>200 Successfully Submitted Message [msgID] to Mtech</p><p><strong>API Response</strong></p><p>There are various responses from the API as listed below;</p><p>1. <em>200 Successfully Submitted Message [messageID] to Mtech</em></p><p>This is the response you get for a successful submission of your message to the API. The parameter messageID will have the reference ID as provided by you when submitting the message</p><p>2<em>. Authentication Failed -&nbsp;</em>Wrong credentials were provided</p><p>3. <em>Missing MSISDN -&nbsp;</em>No destination address was provided</p><p>4. <em>Missing Message Content -&nbsp;</em>No Message content was provided</p><p>5. <em>Missing Source Addres-&nbsp;</em>No Source address was provided</p><p>TO receive messages through our platform, you will be required to provide a URL to be configured for your short code to which we shall forward messages.</p><p>Messages will be forwarded to you via HTTP GET in the below format;</p><p>&nbsp;<em><a href="http://yourUrl/recievingService?dest=DEST&phone=MSISDN&&message=TXT">http://yourUrl/recievingService?dest=DEST&amp;phone=MSISDN&amp;&amp;message=TXT</a>&nbsp;</em></p><p>Description of the above parameters</p><table border="1" cellpadding="0" cellspacing="0" width="638"><tbody><tr><td valign="top" width="319"><strong>Parameter</strong><br></td><td valign="top" width="319"><strong>Description</strong><br></td></tr><tr><td valign="top" width="319">dest<br></td><td valign="top" width="319">The destination Source Addres<br></td></tr><tr><td valign="top" width="319">Phone<br></td><td valign="top" width="319">The Originating Mobile number<br></td></tr><tr><td valign="top" width="319">message<br></td><td valign="top" width="319">The message content<br></td></tr></tbody></table><p><strong>Expected Response</strong></p><p>HTTP/1.1 200 OK</p><p>The sending service expects a response of HTTP status 200 from your web server to consider the message as successful pushed to you</p><p><strong>HTTP DLR RECEIVING</strong></p><p>TO receive Delivery Reports for messages already sent through our platform, please provide URL for configuration on our end.</p><p>The DLR (Delivery receipt) will be forwarded to you via HTTP GET in the below format;</p><p><em><a href="http://yourDlrUrl/dlrService?messageID=<MESSAGEID>&status=<DLR_STAT>&">http://yourDlrUrl/dlrService?messageID=&lt;MESSAGEID&gt;&amp;status=&lt;DLR_STAT&gt;&amp;</a> MSISDN=&lt;PHONE&gt;&amp;SOURCEADDR=&lt;SENDER&gt;</em></p><p>Description of the above parameters</p><table border="1" cellpadding="0" cellspacing="0" width="638"><tbody><tr><td valign="top" width="319"><strong>Parameter</strong><br></td><td valign="top" width="319"><strong>Description</strong><br></td></tr><tr><td valign="top" width="319">MESSAGEID<br></td><td valign="top" width="319">Unique message ID as provided by you during sending<br></td></tr><tr><td valign="top" width="319">DLR_STAT<br></td><td valign="top" width="319">DLR status (See below table for status definitions)<br></td></tr><tr><td valign="top" width="319">SENDER<br></td><td valign="top" width="319">The sender address<br></td></tr><tr><td valign="top" width="319">PHONE<br></td><td valign="top" width="319">The mobile phone that received the message<br></td></tr></tbody></table><p><strong>Expected Response</strong></p><p>HTTP/1.1 200 OK</p><p>The sending service expects a response of HTTP status 200 from your web server to consider the delivery receipt as successful pushed to you.</p><p>The table below outlines the various DLR status codes that can be sent back and the meaning</p><table border="1" cellpadding="0" cellspacing="0" width="563"><tbody><tr><td valign="top" width="79"><strong>Status</strong><br></td><td valign="top" width="484"><strong>Description</strong><br></td></tr><tr><td valign="top" width="79">1<br></td><td valign="top" width="484">Delivered<br></td></tr><tr><td valign="top" width="79">2<br></td><td valign="top" width="484">MessageWaiting<br></td></tr><tr><td valign="top" width="79">3<br></td><td valign="top" width="484">Internal_Failure<br></td></tr><tr><td valign="top" width="79">4<br></td><td valign="top" width="484">DeliveryImpossible<br></td></tr><tr><td valign="top" width="79">5<br></td><td valign="top" width="484">Insufficient_Balance<br></td></tr><tr><td valign="top" width="79">6<br></td><td valign="top" width="484">Invalid_Linkid<br></td></tr><tr><td valign="top" width="79">7<br></td><td valign="top" width="484">DeliveryUncertain<br></td></tr><tr><td valign="top" width="79">8<br></td><td valign="top" width="484">UnknownSubscriber<br></td></tr><tr><td valign="top" width="79">9<br></td><td valign="top" width="484">UnknownBaseStation<br></td></tr><tr><td valign="top" width="79">10<br></td><td valign="top" width="484">UnknownMSC<br></td></tr><tr><td valign="top" width="79">12<br></td><td valign="top" width="484">UnidentifiedSubscriber<br></td></tr><tr><td valign="top" width="79">13<br></td><td valign="top" width="484">AbsentSubscriberSM<br></td></tr><tr><td valign="top" width="79">14<br></td><td valign="top" width="484">UnknownEquipment<br></td></tr><tr><td valign="top" width="79">15<br></td><td valign="top" width="484">RoamingNotAllowed<br></td></tr><tr><td valign="top" width="79">16<br></td><td valign="top" width="484">IllegalSubscriber<br></td></tr><tr><td valign="top" width="79">17<br></td><td valign="top" width="484">BearerServiceNotProvisioned<br></td></tr><tr><td valign="top" width="79">18<br></td><td valign="top" width="484">TeleserviceNotProvisioned<br></td></tr><tr><td valign="top" width="79">19<br></td><td valign="top" width="484">IllegalEquipment<br></td></tr><tr><td valign="top" width="79">20<br></td><td valign="top" width="484">CallBarred<br></td></tr><tr><td valign="top" width="79">21<br></td><td valign="top" width="484">ForwardingViolation<br></td></tr><tr><td valign="top" width="79">22<br></td><td valign="top" width="484">CUG?Reject<br></td></tr><tr><td valign="top" width="79">23<br></td><td valign="top" width="484">IllegalSS?Operation<br></td></tr><tr><td valign="top" width="79">24<br></td><td valign="top" width="484">SS?ErrorStatus<br></td></tr><tr><td valign="top" width="79">25<br></td><td valign="top" width="484">SS?NotAvailable<br></td></tr><tr><td valign="top" width="79">26<br></td><td valign="top" width="484">SS?SubscriptionViolation<br></td></tr><tr><td valign="top" width="79">27<br></td><td valign="top" width="484">SS?Incompatibility<br></td></tr><tr><td valign="top" width="79">28<br></td><td valign="top" width="484">FacilityNotSupported<br></td></tr><tr><td valign="top" width="79">29<br></td><td valign="top" width="484">InvalidTargetBaseStation<br></td></tr><tr><td valign="top" width="79">30<br></td><td valign="top" width="484">NoRadioResourceAvailable<br></td></tr><tr><td valign="top" width="79">31<br></td><td valign="top" width="484">NoHandoverNumberAvailable<br></td></tr><tr><td valign="top" width="79">32<br></td><td valign="top" width="484">SubsequentHandoverFailure<br></td></tr><tr><td valign="top" width="79">33<br></td><td valign="top" width="484">AbsentSubscriber<br></td></tr><tr><td valign="top" width="79">34<br></td><td valign="top" width="484">SubscriberBusyForMT?SMS<br></td></tr><tr><td valign="top" width="79">35<br></td><td valign="top" width="484">SM?DeliveryFailure<br></td></tr><tr><td valign="top" width="79">36<br></td><td valign="top" width="484">MessageWaitingListFull<br></td></tr><tr><td valign="top" width="79">37<br></td><td valign="top" width="484">SystemFailure<br></td></tr><tr><td valign="top" width="79">38<br></td><td valign="top" width="484">DataMissing<br></td></tr><tr><td valign="top" width="79">39<br></td><td valign="top" width="484">UnexpectedDataValue<br></td></tr><tr><td valign="top" width="79">40<br></td><td valign="top" width="484">PW?RegistrationFailure<br></td></tr><tr><td valign="top" width="79">41<br></td><td valign="top" width="484">NegativePW?Check<br></td></tr><tr><td valign="top" width="79">42<br></td><td valign="top" width="484">NoRoamingNumberAvailable<br></td></tr><tr><td valign="top" width="79">43<br></td><td valign="top" width="484">TracingBufferFull<br></td></tr><tr><td valign="top" width="79">44<br></td><td valign="top" width="484">NumberOfPW?AttemptsViolation<br></td></tr><tr><td valign="top" width="79">45<br></td><td valign="top" width="484">NumberChanged<br></td></tr><tr><td valign="top" width="79">46<br></td><td valign="top" width="484">UnknownAlphabet<br></td></tr><tr><td valign="top" width="79">47<br></td><td valign="top" width="484">USSD?Busy<br></td></tr><tr><td valign="top" width="79">48<br></td><td valign="top" width="484">UserAbnormalState<br></td></tr><tr><td valign="top" width="79">49<br></td><td valign="top" width="484">UserInBlacklist<br></td></tr></tbody></table><table border="1" cellpadding="0" cellspacing="0" width="563"><tbody><tr><td valign="top" width="79"><br></td><td valign="top" width="484"><div><br></div></td></tr></tbody></table>', 'try'),
(2, 'MTECH API', 'downloads', 'Messaging.', '<p><img class="fr-dib fr-draggable" src="https://i.froala.com/assets/photo10.jpg" data-id="10" data-type="image" data-name="Image 2016-11-01 at 01:11:48.jpg" style="width: 300px;"></p><p>sample code</p><hr><p><br></p><ol><li>public function actionRequestPasswordReset()</li><li>&nbsp; &nbsp; {</li><li>&nbsp; &nbsp; &nbsp; &nbsp; $model = new PasswordResetRequestForm();</li><li>&nbsp; &nbsp; &nbsp; &nbsp; if ($model-&gt;load(Yii::$app-&gt;request-&gt;post()) &amp;&amp; $model-&gt;validate()) {</li><li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ($model-&gt;sendEmail()) {</li><li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Yii::$app-&gt;session-&gt;setFlash(&#39;success&#39;, &#39;Check your email for further instructions.&#39;);</li><li><br></li><li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return $this-&gt;goHome();</li><li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {</li><li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Yii::$app-&gt;session-&gt;setFlash(&#39;error&#39;, &#39;Sorry, we are unable to reset password for email provided.&#39;);</li><li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</li><li>&nbsp; &nbsp; &nbsp; &nbsp; }</li><li><br></li><li>&nbsp; &nbsp; &nbsp; &nbsp; return $this-&gt;render(&#39;requestPasswordResetToken&#39;, [</li><li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#39;model&#39; =&gt; $model,</li><li>&nbsp; &nbsp; &nbsp; &nbsp; ]);</li><li>&nbsp; &nbsp; }</li></ol><hr><p style="margin-left: 120px;"><br></p>', 'rg'),
(4, 'downloads', 'downloads', 'for dowload documents', '<p><img class="fr-dib fr-draggable" src="https://i.froala.com/download/1a6159196973727e7a186a4678a2917fec3f19a7.png?1480660027" style="width: 133px; height: 140.7px;"></p><hr><p>Downloads here &nbsp;</p><ol><li>MTech Message Api &nbsp;<a class="fr-file" href="https://i.froala.com/download/9c81d4424b6ac174fbaaede20493027e4151645e.pdf?1480671161">eb5YmChbNt94EHFGfMTECHAPI.docx.docx.pdf</a></li><li>MTech Nagios writeup &nbsp;<a class="fr-file" href="https://i.froala.com/download/5d62cac8c492685bb3f360d05e0037dba7f87cd6.docx?1480671211">NAGIOS writeup..docx</a></li><li>MTech Dumies &nbsp;<a class="fr-file" href="https://i.froala.com/download/30abc5c40d57dff78f2389dadf633dbf64c806b1.docx?1480671280">MTECHTechforDummies.docx</a></li></ol><p>Watch video prepared by Mtech</p><p><br></p><p><span class="fr-video fr-dvb fr-draggable" contenteditable="false" draggable="true"><iframe width="640" height="360" src="//www.youtube.com/embed/FT7tk7_J7Vk?wmode=opaque" frameborder="0" allowfullscreen=""></iframe></span><br></p>', 'uyeur'),
(5, 'chirchir', 'gmsil', 'kipchircir', '<p>jkghgu kipdhhshdgd</p>', 'wetwwr');

-- --------------------------------------------------------

--
-- Table structure for table `site_description`
--

CREATE TABLE `site_description` (
  `id` int(11) NOT NULL,
  `title_head` varchar(255) NOT NULL,
  `information` text NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_description`
--

INSERT INTO `site_description` (`id`, `title_head`, `information`, `description`) VALUES
(1, 'KCB API', 'The FAQ (pronounced FAK) or list of "frequently-asked questions"\r\n(and answers) has become a feature of the Internet. The FAQ \r\nseems to have originated in many of the Usenet groups as a\r\nway to acquaint new users with the rules. Today, there are\r\nthousands of FAQs on the World Wide Web.\r\n\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions"\r\n(and answers) has become a feature of the Internet. The FAQ \r\nseems to have originated in many of the Usenet groups as a way \r\nto acquaint new users with the rules. Today, there are thousands o\r\nf FAQs on the World Wide Web.\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions" (and answers) has beco\r\nme a feature of the Internet. The FAQ seems to have originated in many of the Usenet gr\r\noups as a way to acquaint new users with the rules. Today, there are thousands of FAQs on the World Wide Web.\r\n\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions" (and answers) has beco\r\nme a feature of the Internet. The FAQ seems to have originated in many of the Usenet gro\r\nups as a way to acquaint new users with the rules. Today, there are thousands of FAQs on the World Wide Web', 'provides a description for KCB API'),
(2, 'MESSAGE API', 'kipchiThe FAQ (pronounced FAK) or list of "frequently-asked questions"\r\n(and answers) has become a feature of the Internet. The FAQ \r\nseems to have originated in many of the Usenet groups as a\r\nway to acquaint new users with the rules. Today, there are\r\nthousands of FAQs on the World Wide Web.\r\n\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions"\r\n(and answers) has become a feature of the Internet. The FAQ \r\nseems to have originated in many of the Usenet groups as a way \r\nto acquaint new users with the rules. Today, there are thousands o\r\nf FAQs on the World Wide Web.\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions" (and answers) has beco\r\nme a feature of the Internet. The FAQ seems to have originated in many of the Usenet gr\r\noups as a way to acquaint new users with the rules. Today, there are thousands of FAQs on the World Wide Web.\r\n\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions" (and answers) has beco\r\nme a feature of the Internet. The FAQ seems to have originated in many of the Usenet gro\r\nups as a way to acquaint new users with the rules. Today, there are thousands of FAQs on the World Wide Web', 'provides brief intro to message api'),
(3, 'FAQS', 'The FAQ (pronounced FAK) or list of "frequently-asked questions"\r\n (and answers) has become a feature of the Internet. The FAQ \r\nseems to have originated in many of the Usenet groups as a\r\n way to acquaint new users with the rules. Today, there are\r\n thousands of FAQs on the World Wide Web.\r\n\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions"\r\n (and answers) has become a feature of the Internet. The FAQ \r\nseems to have originated in many of the Usenet groups as a way \r\nto acquaint new users with the rules. Today, there are thousands o\r\nf FAQs on the World Wide Web.\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions" (and answers) has beco\r\nme a feature of the Internet. The FAQ seems to have originated in many of the Usenet gr\r\noups as a way to acquaint new users with the rules. Today, there are thousands of FAQs on the World Wide Web.\r\n\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions" (and answers) has beco\r\nme a feature of the Internet. The FAQ seems to have originated in many of the Usenet gro\r\nups as a way to acquaint new users with the rules. Today, there are thousands of FAQs on the World Wide Web.', 'this is all about questions asked'),
(4, 'xxxxx', 'The FAQ (pronounced FAK) or list of "frequently-asked questions"\r\n(and answers) has become a feature of the Internet. The FAQ \r\nseems to have originated in many of the Usenet groups as a\r\nway to acquaint new users with the rules. Today, there are\r\nthousands of FAQs on the World Wide Web.\r\n\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions"\r\n(and answers) has become a feature of the Internet. The FAQ \r\nseems to have originated in many of the Usenet groups as a way \r\nto acquaint new users with the rules. Today, there are thousands o\r\nf FAQs on the World Wide Web.\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions" (and answers) has beco\r\nme a feature of the Internet. The FAQ seems to have originated in many of the Usenet gr\r\noups as a way to acquaint new users with the rules. Today, there are thousands of FAQs on the World Wide Web.\r\n\r\nThe FAQ (pronounced FAK) or list of "frequently-asked questions" (and answers) has beco\r\nme a feature of the Internet. The FAQ seems to have originated in many of the Usenet gro\r\nups as a way to acquaint new users with the rules. Today, there are thousands of FAQs on the World Wide Web', 'xxxx');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idnumber` int(100) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `idnumber`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kipchirchir ', 'kibet', 30395439, 'chirchir', 'p1G9CLoclo0k4HE-e-iUOnD8oi_AHXcW', '$2y$13$U9pM.2f7h2Ms461Pq8IQeecYeG0RLBskCmi70tqqCgxvcJPrkHYc6', '', 'kibet760@gmail.com', 10, '2016-11-01', '0000-00-00'),
(25, 'Kipchirchir', 'kibet', 30395439, 'chirchi', 'j0wlXJycPsNbupuMZd7wlg_DNWeH_aHi', '$2y$13$D.Difax8iqjkbdeEyXVqDOJ3Vi2NYkmVVsJMDgoMvULoeo4.Dop0.', NULL, 'kibet780@gmail.com', 0, '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `site_description`
--
ALTER TABLE `site_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `site_description`
--
ALTER TABLE `site_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
