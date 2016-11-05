<?php
/***************************************************************************
 *   copyright				: (C) 2008 - 2016 WeBid
 *   site					: http://www.webidsupport.com/
 ***************************************************************************/

/***************************************************************************
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version. Although none of the code may be
 *   sold. If you have been sold this script, get a refund.
 ***************************************************************************/

if (!defined('InWeBid')) {
    exit();
}

// CHARSET ENCODING
// Change the charset according to the language used in this file.
$CHARSET = "UTF-8";
// DOCUMENT DIRECTION
// Change the $DOCDIR variable below according to the document direction needed
// by the language you are using.
// Possible values are:
// - ltr (default) - means left-to-right document (almost any language)
// - rtl - means right-to-left document (i.e. arabic, hebrew, ect).
$DOCDIR = "ltr";
// Error messages and user interface messages are below. Translate them taking care of leaving
// The PHP and HTML tags unchanged.
// Error messages =============================================================
$ERR_001 = "Database access error. Please contact the site administrator.";
$ERR_002 = "Name is missing";
$ERR_003 = "Username is missing";
$ERR_004 = "Password is missing";
$ERR_005 = "Please, repeat your password";
$ERR_006 = "Passwords do not match";
$ERR_007 = "E-mail address missing";
$ERR_008 = "Please, insert a valid e-mail address";
$ERR_009 = "The username already exists in the database";
$ERR_010 = "Username too short (min 6 chars)";
$ERR_011 = "Password too short (min 6 chars)";
$ERR_017 = "Item's title is missing";
$ERR_018 = "Item's description is missing";
$ERR_019 = "Starting bid is missing";
$ERR_020 = "Minimum quantity field is not correct";
$ERR_021 = "Reserve price is missing";
$ERR_022 = "The reserve price you inserted is not correct";
$ERR_023 = "Choose a category for your item";
$ERR_024 = "Choose a payment method";
$ERR_025 = "Invalid user";
$ERR_026 = "Invalid password";
$ERR_030 = "Fields must be numeric and in nnnn.nn format";
$ERR_031 = "The form you are submitting is not complete";
$ERR_032 = "One or both the e-mail addresses are not correct";
$ERR_033 = "Invalid confirmation link";
$ERR_037 = "Search keyword cannot be empty";
$ERR_038 = "Login incorrect";
$ERR_039 = "You have already confirmed your registration.";
$ERR_040 = "You are the winning bidder and cannot place a bid lower than your previous maximum bid.";
$ERR_043 = "Invalid field format: must be numeric";
$ERR_044 = "A user must be a member of at least one group";
$ERR_047 = "Required fields are missing";
$ERR_048 = "Incorrect login";
$ERR_049 = "The category's name cannot be empty";
$ERR_050 = "At least one group must have Auto Join enabled";
$ERR_051 = "Please, insert a valid number of digits";
$ERR_054 = "Please, fill in both the password fields";
$ERR_055 = "User <i>%s</i> already exists in the database";
$ERR_056 = "Bid increment value missing";
$ERR_057 = "Bid increment values must be numeric";
$ERR_058 = "Incorrect money format.";
$ERR_059 = "Your previous bid for this auction is higher than your current bid.<br>  In Dutch Auctions you may not place a bid if your previous <b>amount of bid times the quantity</b> is greater than your <b>amount of current bid times the quantity</b>.";
$ERR_060 = "The start date cannot be in the past.";
$ERR_061 = "The buy now price you inserted is not correct";
$ERR_062 = "You may not set a reserve price in a Dutch Auction";
$ERR_063 = "You may not use custom increment in a Dutch Auction";
$ERR_064 = "You may not use the Buy Now feature in a Dutch Auction";
$ERR_067 = "Required fields missing (all fields are required).";
$ERR_068 = "Chosen theme does not exist";
$ERR_069 = "Currency conversion failed";
$ERR_070 = "This message doesn't exist";
$ERR_071 = "Username is invalid can only contain letters and numbers";
$ERR_072 = "You must enter a bid amount";
$ERR_073 = "You cannot bid on an auction that has not yet started";
$ERR_074 = "You have already left feedback on this transaction";
$ERR_076 = 'Invalid Username/E-mail combination';
$ERR_077 = 'Valid Token Expired';
$ERR_078 = 'You must agree to the Terms and Conditions';
$ERR_079 = 'The Shipping fee price you inserted is not correct';
$ERR_080 = 'Additional Shipping price you inserted is not correct';
$ERR_081 = "The balance you entered is not valid";
$ERR_082 = "Your auctions end date must be after it's start date";

$ERR_100 = "User does not exist";
$ERR_101 = "Password incorrect";
$ERR_103 = "You cannot rate yourself";
$ERR_104 = "All fields required";
$ERR_105 = "Username does not exist";
$ERR_107 = "Username is too short";
$ERR_108 = "Password is too short";
$ERR_109 = "Passwords do not match";
$ERR_110 = "E-mail address incorrect";
$ERR_111 = "Such a user already exists";
$ERR_112 = "Data missing";
$ERR_113 = "You must be at least 18 years old to register";
$ERR_114 = "No active auctions for this category";
$ERR_115 = "E-mail address already used";
$ERR_117 = "Invalid date of birth";
$ERR_122 = "No auction found";
$ERR_600 = 'Invalid auction type';
$ERR_601 = "Quantity field not correct, must be greater than 0";
$ERR_602 = "Images must be GIF, JPG or PNG";
$ERR_603 = "The image is too large.";
$ERR_606 = "Invalid auction";
$ERR_607 = "Your bid is below the minimum bid";
$ERR_608 = "The specified quantity is not valid, you cannot bid for more items than are available";
$ERR_608a = "The specified quantity is not valid, please enter a valid amount";
$ERR_609 = "User does not exist";
$ERR_610 = "Fill in your username and password";
$ERR_611 = "Password is incorrect";
$ERR_612 = "You cannot bid on your own auction";
$ERR_614 = "This auction is closed";
$ERR_616 = "Zip/Post code too short";
$ERR_617 = "Telephone number incorrect";
$ERR_618 = "Your account has been suspended by admin.";
$ERR_619 = "This auction has been suspended";
$ERR_620 = "Your account has yet to be activated please check your emails for the activation link.";
$ERR_621 = "Your account has yet to be activated by admin.";
$ERR_622 = "No such auction.";
$ERR_623 = "The auction you are trying to find either never existed or has been removed.";
$ERR_624 = "No message to post";
$ERR_700 = "Incorrect date format";
$ERR_704 = "You may not leave feedback about this user! <br>This auction is not closed!";
$ERR_705 = "You may only leave feedback, if you have a closed transaction with this user!";
$ERR_709 = "The picture you uploaded is too big. It cannot exceed ";
$ERR_710 = "Incorrect file type. Allowed file types are: GIF, PNG and JPEG";
$ERR_711 = "You cannot buy, you are the seller!";
$ERR_712 = "<b>Buy It Now</b> is not available for this auction";
$ERR_713 = 'The value from must be less than the value to';
$ERR_714 = 'The relist value must be numeric';
$ERR_715 = 'You cannot choose to relist that many times';
$ERR_716 = 'Image not found';
$ERR_5002 = "You must select at least one statistic type (accesses, browsers &amp; platforms, by country)";
$ERR_5014 = "The Subject or message is missing";
$ERR_5033 = "E-mail address missing";
$ERR_5034 = "Address is missing";
$ERR_5035 = "City is missing";
$ERR_5036 = "Province is missing";
$ERR_5037 = "Country is missing";
$ERR_5045 = "The reserve price cannot be less than the minimum bid";
$ERR_5046 = "The buy now price must be greater than the minimum bid and/or the reserve price";
$ERR_25_0001 = "Please choose a sub-category";
$ERR_INVALID_REPORT_REASON = "Please select a reason for report";

// UI Messages =============================================================
$MSG['000'] = "n/a";
$MSG['001'] = "New user registration";
$MSG['002'] = "Full name";
$MSG['username'] = "Username";
$MSG['password'] = "Password";
$MSG['005'] = "Confirm password";
$MSG['006'] = "Your e-mail address";
$MSG['submit'] = "Submit";
$MSG['008'] = "Delete";
$MSG['009'] = "Address";
$MSG['010'] = "City";
$MSG['011'] = "State/Province";
$MSG['012'] = "ZIP/Post Code";
$MSG['013'] = "Telephone";
$MSG['014'] = "Country";
$MSG['017'] = "Item title";
$MSG['018'] = "Item description";
$MSG['019'] = "Default Image";
$MSG['020'] = "Starting price";
$MSG['021'] = "Reserve price";
$MSG['022'] = "Duration";
$MSG['023'] = "Shipping fee";
$MSG['024'] = "Your new password";
$MSG['025'] = "Shipping conditions";
$MSG['026'] = "Payment methods";
$MSG['027'] = "Choose a category";
$MSG['028'] = "Sell an item";
$MSG['no'] = "No";
$MSG['yes'] = "Yes";
$MSG['031'] = "Buyer pays shipping expenses";
$MSG['032'] = "Seller pays shipping expenses";
$MSG['033'] = "International shipping";
$MSG['035'] = "Reset form";
$MSG['038'] = "Asking Price";
$MSG['040'] = "Submit auction";
$MSG['041'] = "Item category";
$MSG['043'] = "Will NOT ship internationally";
$MSG['045'] = "Users management";
$MSG['046'] = "You can still <a href='sell.php?mode=recall'>make changes</a> to your auction";
$MSG['048'] = "User Registration Fields";
$MSG['050'] = "(min 6 chars)";
$MSG['052'] = "Login";
$MSG['059'] = "Email Sent";
$MSG['067'] = "View Open Auctions";
$MSG['067a'] = "Search Auctions";
$MSG['069'] = "Auctions Duration";
$MSG['071'] = "Update";
$MSG['072'] = " users are awaiting feedback from you";
$MSG['075'] = "Payment Methods";
$MSG['078'] = "Categories Table";
$MSG['079'] = "Your Auction Has Closed";
$MSG['080'] = "Resynchronise or Reset Caches";
$MSG['081'] = "Countries Table";
$MSG['084'] = "Message posted";
$MSG['086'] = "Categories table updated";
$MSG['087'] = "Description";
$MSG['088'] = "into this currency";
$MSG['089'] = "Process changes";
$MSG['092'] = 'Edit, delete or add payment methods using the form below. These are alternative external payment options, to enable or disable the inbuilt payment gateways see the <a href="fee_gateways.php">payment gateway settings</a> page.';
$MSG['093'] = "Payment methods table updated";
$MSG['094'] = "Edit, delete or add countries using the form below.";
$MSG['095'] = "Welcome, You're Now A Member!";
$MSG['095a'] = "Your account has been suspended.";
$MSG['095b'] = "Your account has been re-activated.";
$MSG['097'] = "Days";
$MSG['098'] = "Registration Confirmation";
$MSG['099'] = "Your Auction Has Been Confirmed";
$MSG['100'] = "<h3>Your auction has been setup. A confirmation e-mail will been sent to you.</h3>";
$MSG['101'] = "View your auction";
$MSG['102'] = 'Auction #%s, your auction will close %s';
$MSG['103'] = " Search ";
$MSG['104'] = "Browse ";
$MSG['105'] = "View history";
$MSG['106'] = "Send to a friend";
$MSG['107'] = "User's e-mail";
$MSG['109'] = "Day";
$MSG['110'] = "Admin";
$MSG['111'] = "Auction started";
$MSG['112'] = "Auction ends";
$MSG['113'] = "Auction ID";
$MSG['114'] = "No picture available";
$MSG['116'] = "Current Bid";
$MSG['117'] = "Highest bidder";
$MSG['118'] = "Ends within";
$MSG['119'] = "# of bids";
$MSG['120'] = "Bid increment";
$MSG['121'] = "Place Your Bid Here:";
$MSG['122'] = "Edit, delete or add auction durations using the form below";
$MSG['124'] = "Minimum bid";
$MSG['125'] = "Seller";
$MSG['126'] = " days, ";
$MSG['126b'] = " day, ";
$MSG['126a'] = "days ago";
$MSG['127'] = "Starting Bid";
$MSG['128'] = "Bid Increments";
$MSG['129'] = "ID";
$MSG['130'] = "Bid";
$MSG['131'] = "Buyer";
$MSG['132'] = "Categories Translation Table";
$MSG['135'] = "Edit, delete or add increments using the form below.<br>
			Be careful, there's no control over the table's values congruence.
			You must take care to check it yourself. The only data check performed is over the fields content (must be numeric) but the relation between them is not checked.";
$MSG['137'] = "Increment";
$MSG['138'] = "Back to the auction";
$MSG['139'] = "Send this auction to a friend";
$MSG['140'] = "Your friend's name";
$MSG['141'] = "Your friend's e-mail";
$MSG['143'] = "Your e-mail";
$MSG['144'] = "Add a comment";
$MSG['146'] = "This auction has been sent to ";
$MSG['148'] = "Help";
$MSG['149'] = "You can contact this user using the form below.";
$MSG['152'] = "Confirm your bid";
$MSG['154'] = "You Are Bidding on:";
$MSG['156'] = "Your bid:";
$MSG['159'] = "Bidder:";
$MSG['160'] = "Increments table updated";
$MSG['161'] = "Edit, delete or add categories using the form below.";
$MSG['163'] = "Register!";
$MSG['165'] = "Category: ";
$MSG['166'] = "Home";
$MSG['167'] = "Picture";
$MSG['168'] = "Auction";
$MSG['169'] = "Actual bid";
$MSG['170'] = "Bids #";
$MSG['171'] = "Ends in";
$MSG['171a'] = "Ended";
$MSG['175'] = "Time";
$MSG['176'] = "Bidder";
$MSG['181'] = "User's login";
$MSG['183'] = "Your data has been updated";
$MSG['185'] = "Currently viewing feedback for ";
$MSG['187'] = "Your username";
$MSG['188'] = "Your password";
$MSG['189'] = "Total Due";
$MSG['191'] = "Your copyright message";
$MSG['192'] = "This is a message that is added to the bottom of every page";
$MSG['197'] = "Auction's title";
$MSG['198'] = "No items found";
$MSG['199'] = "Search";
$MSG['200'] = "Hello, ";
$MSG['203'] = "Active auctions";
$MSG['204'] = "Closed auctions";
$MSG['205'] = "Your Control Panel";
$MSG['206'] = "User's profile";
$MSG['207'] = "Leave Feedback";
$MSG['208'] = "View Feedback";
$MSG['209'] = "Registered user since: ";
$MSG['210'] = "Contact ";
$MSG['211'] = "Start auction now";
$MSG['213'] = "View active auctions";
$MSG['214'] = "View Closed Auctions";
$MSG['215'] = "Forgot your password?";
$MSG['217'] = "A new password has been sent to your e-mail address.";
$MSG['219'] = "Active auctions: ";
$MSG['220'] = "Closed auctions: ";
$MSG['221'] = "User login";
$MSG['222'] = "User Feedback";
$MSG['227'] = "Your comment ";
$MSG['229'] = "Newest feedback:";
$MSG['230'] = "View all feedback";
$MSG['231'] = "REGISTERED USERS";
$MSG['232'] = "AUCTIONS ";
$MSG['234'] = "&lt;&lt; Back";
$MSG['235'] = "Register now";
$MSG['239'] = "Auctions";
$MSG['240'] = "From";
$MSG['241'] = "To";
$MSG['242'] = "Sent";
$MSG['243'] = "If you want to change your password, please fill in the two fields below. Otherwise leave them blank.";
$MSG['244'] = "Edit Settings";
$MSG['245'] = "Logout";
$MSG['248'] = "Confirm your registration";
$MSG['249'] = "Confirm";
$MSG['250'] = "Refuse";
$MSG['251'] = "---- Select here";
$MSG['252'] = "Date of Birth";
$MSG['257'] = "Auction's type";
$MSG['258'] = "Items quantity";
$MSG['259'] = "Item";
$MSG['260'] = "Or start at:";
$MSG['261'] = "Auction type";
$MSG['263'] = "Fee Amount";
$MSG['264'] = "You still can ";
$MSG['265'] = "make changes";
$MSG['266'] = " to this auction";
$MSG['267'] = "If you reached this page, you or someone claiming to be you, signed up at this site.
			<br>To confirm your registration simply press the <b>Confirm</b> button below.
			<br>If you didn't want to register and want to delete your data from our database, use the <b>Refuse</b> button.";
$MSG['268'] = "Additional options";
$MSG['270'] = "Back";
$MSG['271'] = "Your bid has been processed";
$MSG['272'] = "Auction:";
$MSG['273'] = "Make featured";
$MSG['274'] = "Make bold";
$MSG['275'] = "Go!";
$MSG['275a'] = "Login";
$MSG['276'] = "Categories";
$MSG['277'] = "All categories";
$MSG['278'] = "Latest Auctions";
$MSG['279'] = "Hot Items";
$MSG['280'] = "Next Ending!";
$MSG['281'] = "Help Column";
$MSG['282'] = "News";
$MSG['283'] = "minimum";
$MSG['284'] = "Quantity";
$MSG['287'] = "Category";
$MSG['290'] = "Total items:";
$MSG['292'] = "Make highlighted";
$MSG['293'] = "Nick";
$MSG['294'] = "Name";
$MSG['295'] = "Country";
$MSG['296'] = "E-mail";
$MSG['297'] = "Action";
$MSG['298'] = "Edit";
$MSG['299'] = "Activate User";
$MSG['300'] = "Suspend";
$MSG['301'] = "users found in the database";
$MSG['302'] = "Name";
$MSG['303'] = "E-mail";
$MSG['305'] = "Suspend User";
$MSG['306'] = "Reactivate User";
$MSG['308'] = "Are you sure you want to suspend this user?";
$MSG['309'] = "Are you sure you want to reactivate this user?";
$MSG['310'] = "Reactivate";
$MSG['311'] = "auctions found in the database";
$MSG['312'] = "Title";
$MSG['313'] = "User";
$MSG['314'] = "Date";
$MSG['319'] = "Shipping";
$MSG['321'] = "Suspend auction";
$MSG['322'] = "Reactivate auction";
$MSG['323'] = "Are you sure you want to suspend this auction?";
$MSG['324'] = "Are you sure you want to reactivate this auction?";
$MSG['328'] = "Colour";
$MSG['329'] = "Image Location";
$MSG['330'] = "Thank you for confirming your registration!<br>The registration process completed and you can now participate in our site's activities.<br>";
$MSG['331'] = "Your registration has been deleted permanently from our database.";
$MSG['332'] = "Subject";
$MSG['333'] = "Message";
$MSG['334'] = "Contact with";
$MSG['335'] = "Contact from ";
$MSG['336'] = "regarding your auction: ";
$MSG['337'] = "Your message has been sent to ";
$MSG['340'] = "From";
$MSG['341'] = "View all news";
$MSG['342'] = " News";
$MSG['344'] = "Time Settings";
$MSG['345'] = "Choose the time zone you want all the times on your site to be in";
$MSG['346'] = "Time Zone";
$MSG['347'] = "Time settings updated";
$MSG['348'] = "Batch Procedures Settings";
$MSG['349'] = "Reply";
$MSG['351'] = "Back to inbox";
$MSG['352'] = "Email Format";
$MSG['354'] = "Closed Auctions";
$MSG['357'] = "percent";
$MSG['359'] = " Updated";
$MSG['363'] = "Dates Format";
$MSG['364'] = "Date";
$MSG['365'] = "Admin Users";
$MSG['367'] = "New admin user";
$MSG['368'] = "Mass category add<br><span class=\"smallspan\">Just enter category names and put each category on a new line</span>";
$MSG['371'] = "WeBid needs to periodically run <code>batch.php</code> to close expired auctions and send notification e-mails to the seller and/or the winner. The recommended way to run <code>batch.php</code> is to set up a <a href=\"http://www.webidsupport.com/forums/index.php?threads/setting-up-a-cronjob.10244/\" target=\"_blank\">cronjob</a> if you run a Unix/Linux server.<br>If for any reason you can't run a cronjob on your server, you can choose the <b>Non-batch</b> option below to have <code>batch.php</code> run by WeBid itself: in this case <code>cron.php</code> will be run each time someone access your home page.";
$MSG['372'] = "Run cron";
$MSG['373'] = "Batch";
$MSG['374'] = "Non-batch";
$MSG['375'] = "According to the default in WeBid's Settings, <code>cron.php</code> automatically deletes auctions older than 30 days.
			<br>You may change the time period below.";
$MSG['376'] = "Delete auctions older than";
$MSG['377'] = " days";
$MSG['379'] = "Choose the format you want date to appear on your site.";
$MSG['382'] = "mm/dd/yyyy";
$MSG['383'] = "dd/mm/yyyy";
$MSG['385'] = "Recent Feedback";
$MSG['386'] = "Last Month";
$MSG['387'] = "Last Six Months";
$MSG['388'] = "Last Twelve Months";
$MSG['389'] = "Feedback As Seller";
$MSG['390'] = "Feedback As Buyer";
$MSG['391'] = "Amount";
$MSG['392'] = "Fee Type";
$MSG['393'] = "flat";
$MSG['394'] = "Add";
$MSG['398'] = "Send Newsletter";
$MSG['399'] = "Search for it!";
$MSG['401'] = "Privacy Policy";
$MSG['402'] = "Privacy Policy Page";
$MSG['403'] = "Activate Privacy Policy Page?";
$MSG['404'] = "Privacy Policy content<br>(HTML allowed)";
$MSG['405'] = "Activate this option if you want a Privacy Policy link to appear in the footer of your pages.";
$MSG['406'] = "Privacy Policy Settings Updated";
$MSG['415'] = "Error";
$MSG['417'] = "General";
$MSG['418'] = "Are you sure you want to activate this user?";
$MSG['422'] = "Outstanding payments";
$MSG['423'] = "Payment Success";
$MSG['424'] = "Your payment has been confirmed.<br><br>Thank you for your business.";
$MSG['425'] = "Payment Failure";
$MSG['426'] = "Your payment hasn't been registered, or was invalid.<br> <br> Sorry for the inconvenience.";
$MSG['429'] = "There were no bids or reserve price was not met";
$MSG['430'] = "User Signup Fee";
$MSG['431'] = "Auction Fees";
$MSG['432'] = "Auction Setup Fee";
$MSG['433'] = "Home Page Featured Fee";
$MSG['434'] = "Highlighted Item Fee";
$MSG['435'] = "Image Upload Fee";
$MSG['436'] = "Buy Now Fee";
$MSG['437'] = "Relist Fee";
$MSG['439'] = "Bold Item Fee";
$MSG['440'] = "Reserve Price Fee";
$MSG['441'] = "Please create your username and password";
$MSG['442'] = "Please enter your username and password";
$MSG['443'] = "%s currently has a full inbox at the moment please try again later";
$MSG['444'] = "Messages deleted";
$MSG['445'] = "Payments Gateways";
$MSG['446'] = "Required?";
$MSG['447'] = "Enabled?";
$MSG['448'] = "User Groups";
$MSG['449'] = "Group ID";
$MSG['450'] = "Group Name";
$MSG['451'] = "User Count";
$MSG['452'] = "Add/ Edit Group";
$MSG['453'] = "Winners details";
$MSG['454'] = "Auctions you won";
$MSG['455'] = "Winner";
$MSG['457'] = "Winner's Bid";
$MSG['458'] = "Auction: ";
$MSG['460'] = "Seller's E-mail";
$MSG['461'] = "Your Highest Bid";
$MSG['464'] = "Advanced Search";
$MSG['471'] = "New Auction Notifications";
$MSG['472'] = "Watchlist";
$MSG['496'] = "Buy Now";
$MSG['497'] = "Buy Now Price";
$MSG['498'] = "Item purchased successfully<br>";
$MSG['499'] = "Total neutral feedback received: ";
$MSG['500'] = "Total positive feedback received: ";
$MSG['501'] = "Total negative feedback received: ";
$MSG['502'] = "Total feedback received: ";
$MSG['503'] = "Feedback";
$MSG['504'] = "comment";
$MSG['505'] = "Back to user's profile";
$MSG['506'] = "sent feedback on: ";
$MSG['507'] = "Hide history";
$MSG['508'] = "new messages";
$MSG['509'] = "User's data";
$MSG['510'] = "There are currently no Reminders to display.";
$MSG['511'] = "Edit user";
$MSG['512'] = "Edit auction";
$MSG['514'] = "<b>Reserve not met</b>";
$MSG['515'] = 'Activate User';
$MSG['516'] = "News Management";
$MSG['517'] = " news items found in the database.";
$MSG['518'] = "Add new";
$MSG['519'] = "Title";
$MSG['520'] = "Content";
$MSG['521'] = "Activate";
$MSG['522'] = "Buyer fees due";
$MSG['523'] = "Final value fees due";
$MSG['524'] = "SETTINGS";
$MSG['525'] = "Admin users management";
$MSG['526'] = "General Settings";
$MSG['527'] = "Site name";
$MSG['528'] = "Site URL";
$MSG['530'] = "Save changes";
$MSG['534'] = "Show acceptance text?";
$MSG['535'] = "Your site's name will appear in the e-mail messages WeBid sends to users";
$MSG['536'] = "This must be the complete URL (starting with <b>http://</b>) of your WeBid installation.<br>Be sure to include the ending slash.";
$MSG['539'] = "Selecting the <b>Yes</b> option below will make WeBid display the text you fill in the text box below in the users registration page just before the submit button.<br>
			This is typically used to display some legal notes users accept submitting the registration form.";
$MSG['540'] = "Admin e-mail";
$MSG['541'] = "The admin e-mail address is used to send automatic e-mail messages";
$MSG['542'] = "General settings updated";
$MSG['543'] = "Make this question public";
$MSG['552'] = "Questions";
$MSG['555'] = "Asker";
$MSG['557'] = "Item Details";
$MSG['558'] = "Created";
$MSG['559'] = "Last login";
$MSG['560'] = "Status";
$MSG['561'] = "DELETE";
$MSG['562'] = "Edit admin user";
$MSG['563'] = "If you want to change the user's password use the two fields below. To maintain the current password leave them blank.";
$MSG['564'] = "Repeat password";
$MSG['566'] = "active";
$MSG['567'] = "not active";
$MSG['569'] = "Insert user";
$MSG['570'] = "Never logged in";
$MSG['578'] = "Can Sell";
$MSG['579'] = "Can Buy";
$MSG['580'] = "Auto Join";
$MSG['581'] = "Please proceed to one of the payment gateways listed below to pay the seller the amount of <b>%s</b>.";
$MSG['582'] = "Please proceed to one of the payment gateways listed below to credit your account by amount of <b>%s</b>.";
$MSG['583'] = "To activate your account please proceed to one of the payment gateways listed below to pay the fee of <b>%s</b>.";
$MSG['590'] = "To finalise your auction please proceed to one of the payment gateways listed below to pay the fee of <b>%s</b>.";
$MSG['591'] = "To finalise the relisting your auction(s) please proceed to one of the payment gateways listed below to pay the fee of <b>%s</b>.";
$MSG['592'] = "Logged in as:";
$MSG['593'] = "Reminders";
$MSG['594'] = "Acceptance text";
$MSG['603'] = "Receive Newsletter?";
$MSG['605'] = "Message Body";
$MSG['606'] = "By clicking save changes the newsletter will be sent to all of the users who are signed up to receive the newsletter in the selected group.";
$MSG['607'] = "Newsletter Submission";
$MSG['608'] = "Would you like to receive our Newsletter?";
$MSG['609'] = "Check NO to unsubscribe to our Newsletter";
$MSG['610'] = "Make a selection in the image below of what you want to show in your thumbnail";
$MSG['611'] = "<b>This item has been viewed</b>";
$MSG['612'] = "<b>times</b>";
$MSG['613'] = "Thumbnail preview";
$MSG['614'] = "Use the built-in proportional increments table";
$MSG['615'] = "Use your custom fixed increment";
$MSG['616'] = "Save Thumbnail";
$MSG['617'] = "*NOTE*  If you want to change your password use the two fields below.<br>Otherwise leave them blank.";
$MSG['618'] = "Cancel";
$MSG['619'] = "Open Auctions";
$MSG['619a'] = "All Auctions";
$MSG['620'] = "Your bids";
$MSG['621'] = "Edit your personal profile";
$MSG['622'] = "My control panel";
$MSG['623'] = "View Messages";
$MSG['624'] = "Auction Title";
$MSG['625'] = "Started";
$MSG['626'] = "Ends";
$MSG['627'] = "Total Bids";
$MSG['628'] = "Max. Bid";
$MSG['629'] = "*If you click cancel the thumbnail image for your auction will be a squashed down version of the image you uploaded/set as default";
$MSG['630'] = "Re-list";
$MSG['631'] = "Process selected auctions";
$MSG['640'] = "*Note* For a Dutch Auction you may not set a reserve price, custom increment amount, nor use the BUY NOW feature.";
$MSG['641'] = "Dutch auction";
$MSG['642'] = "Standard auction";
$MSG['645'] = "Post question for Seller";
$MSG['646'] = "You must be logged in to ask questions to the seller";
$MSG['650'] = "Question";
$MSG['651'] = "Question about your auction: %s";
$MSG['661'] = "Add Photo Gallery";
$MSG['662'] = "<h2>Create thumbnail</h2>";
$MSG['663'] = "Photo Gallery";
$MSG['667'] = "Viewing user: ";
$MSG['668'] = "This auction has not yet started.";
$MSG['672'] = "Kbytes";
$MSG['673'] = "You can upload up to %s photos. Each photo must be smaller than %s KB.";
$MSG['674'] = "You can only upload %s photos. Please remove some from the queue.";
$MSG['675'] = "You will be charged %s for each picture you upload.";
$MSG['677'] = "Upload Pictures";
$MSG['678'] = "Close";
$MSG['679'] = "Please, follow the steps below.";
$MSG['680'] = "Select the file to upload";
$MSG['681'] = "Upload file";
$MSG['682'] = "Repeat steps 1. and 2. for each picture. When finished click on the <i>Create Gallery</i> button below.<br>When you upload the first image or set one as the default you will need to create a thumbnail for it";
$MSG['683'] = "&gt;&gt;&gt; Create Gallery &lt;&lt;&lt;";
$MSG['684'] = "Filename";
$MSG['685'] = "Size (bytes)";
$MSG['686'] = "Default";
$MSG['687'] = "Uploaded Files";
$MSG['688'] = "You already uploaded ";
$MSG['689'] = " files";
$MSG['694'] = "View Gallery";
$MSG['699'] = "Your bid of ";
$MSG['700'] = " has been entered. ";
$MSG['701'] = " Your bid was not enough to make you the highest bidder!<br>Would you like to bid again?";
$MSG['718'] = "Auction Type";
$MSG['719'] = "Payment Details";
$MSG['720'] = "PayPal Email Address";
$MSG['724'] = "Additional Information";
$MSG['725'] = "Optimisation";
$MSG['726'] = "Enable the template cache?";
$MSG['727'] = "This will massively increase the speed of your site. It is recommended this is only disabled when making updates to your template";
$MSG['740'] = "None";
$MSG['741'] = "Image";
$MSG['742'] = "reCaptcha";
$MSG['743'] = "Captcha type on registration page";
$MSG['744'] = "Captcha type on send auction to friend page";
$MSG['745'] = "Captcha are used to prevent spam it is generally a good idea to enable some sort of captcha";
$MSG['746'] = "Recaptcha site key";
$MSG['747'] = "Recaptcha secret key";
$MSG['748'] = 'To use reCaptcha you must create a free account at <a href="http://recaptcha.net/" class="new-window">http://recaptcha.net/</a> and add this domain to a key pair';
$MSG['749'] = 'Spam settings';
$MSG['750'] = 'Spam settings updated';
$MSG['751'] = 'You cannot use reCaptcha without the two keys';
$MSG['752'] = 'The string you entered for the image verification did not match what was displayed.';
$MSG['753'] = 'Account Suspended';
$MSG['754'] = 'You have reached the debt limit allowed on your account; your account will be suspended until this is paid back.<br>You can this back <a href="outstanding.php">here</a>';
$MSG['755'] = 'Paid';
$MSG['756'] = 'Pay Now';
$MSG['757'] = 'Security Code';
$MSG['758'] = 'Verify Code';
$MSG['759'] = 'Enable';
$MSG['760'] = 'Disable';
$MSG['762'] = 'Fee Gateway Settings Updated';
$MSG['763'] = 'Balance';
$MSG['764'] = 'Send payment reminder';
$MSG['765'] = 'Payment reminder sent';
$MSG['766'] = 'Invoice';
$MSG['767'] = 'Click on the button on the right to proceed to PayPal';
$MSG['768'] = 'Sign up Fee';
$MSG['769'] = 'Pay listing fee';
$MSG['770'] = 'Pay relist fee';
$MSG['771'] = 'Default Name';
$MSG['772'] = 'Translation';
$MSG['773'] = 'Authorize.net Login ID';
$MSG['774'] = 'Authorize.net Transaction Key';
$MSG['775'] = 'Buyer Fee';
$MSG['776'] = "To finalise the sale please proceed to one of the payment gateways listed below to pay the fee of <b>%s</b>.";
$MSG['777'] = 'You have an outstanding payment of the buyers fee for the item %s; your account will be suspended until this is paid. You can pay for this now at <a href="%s">Here</a>';
$MSG['778'] = 'If you wish to pay via an alternative method contact <a href="profile.php?user_id=%s&amp;auction_id=%s">%s</a> to find out how.';
$MSG['778a'] = 'The seller has not set up any online payment methods. Please contact them to find how they want to accept the payment';
$MSG['779'] = 'User Registration Fields Updated';
$MSG['780'] = 'Show On Registration Page';
$MSG['781'] = 'Birthday Field Required?';
$MSG['782'] = 'Address Field Required?';
$MSG['783'] = 'City Field Required?';
$MSG['784'] = 'State/Province Field Required?';
$MSG['785'] = 'Country Field Required?';
$MSG['786'] = 'Zip/Post Code Field Required?';
$MSG['787'] = 'Telephone Field Required?';
$MSG['791'] = 'Final Price Fee';
$MSG['792'] = 'You need to pay for %s item(s)';
$MSG['793'] = ' items you\'re bidding on are ending soon';
$MSG['794'] = 'You have been outbid on %s items';
$MSG['796'] = 'You have an outstanding payment of the final value fee for the item %s; your account will be suspended until this is paid. You can pay for this now at <a href="%s">Here</a>';
$MSG['801'] = 'Shared SSL URL';
$MSG['802'] = 'If you\'re using shared SSL enter the URL here';
$MSG['803'] = 'Subtitle Fee';
$MSG['804'] = 'Extra Category Fee';
$MSG['805'] = 'Skip step';
$MSG['806'] = 'Item subtitle';
$MSG['809'] = 'A field must be shown if it\'s a required field';
$MSG['810'] = 'A valid PayPal email address is required';
$MSG['811'] = 'A valid AuthNet ID and password are required';
$MSG['812'] = 'File Name:';
$MSG['813'] = 'File Content:';
$MSG['814'] = 'Second Category';
$MSG['815'] = 'Are you sure you want to activate this user?';
$MSG['816'] = 'Gallery';
$MSG['817'] = 'Prices';
$MSG['818'] = 'You do not have permission to list items';
$MSG['819'] = 'You do not have permission to buy items';
$MSG['820'] = 'Account selling permission request';
$MSG['821'] = 'A valid 2Checkout ID is required';
$MSG['822'] = 'A valid Moneybookers email address is required';
$MSG['823'] = 'A valid Worldpay ID is required';
$MSG['824'] = 'Worldpay ID';
$MSG['825'] = 'Moneybookers Email Address';
$MSG['826'] = '2Checkout ID';
$MSG['827'] = 'Weekly Report';
$MSG['828'] = 'Week';
$MSG['829'] = 'View by ';
$MSG['830'] = 'Month';
$MSG['836'] = 'Member types Updated';
$MSG['837'] = '(contains %s FAQs)';
$MSG['838'] = 'Are you sure you want to process the following categories: ';
$MSG['839'] = 'What do you want to do with the FAQs in the following categories';
$MSG['840'] = 'Move to ';
$MSG['841'] = 'Admin Template';
$MSG['842'] = 'Set Fees';
$MSG['845'] = '<p><img src="' . $system->SETTINGS['siteurl'] . 'themes/' . $system->SETTINGS['admin_theme'] . '/images/bullet_blue.png"> Shows a category that contains children categories</p><p><img src="' . $system->SETTINGS['siteurl'] . 'themes/' . $system->SETTINGS['admin_theme'] . '/images/bullet_red.png"> Shows a category that contains auctions</p>';
$MSG['846'] = 'Account Balance';
$MSG['847'] = 'Price';
$MSG['853'] = 'You are not currently watching any items';
$MSG['854'] = 'Accounts';
$MSG['855'] = 'Choose View';
$MSG['856'] = 'Select Period';
$MSG['857'] = 'Total Invoiced';
$MSG['858'] = 'I have read and agree to the <a href="' . $system->SETTINGS['siteurl'] . 'contents.php?show=terms" target="_blank">Terms and Conditions</a>';
$MSG['859'] = 'Thank you %s for Registering.';
$MSG['016'] = 'We have sent a confirmation email to %s. This email contains an activation link to confirm your email address, simply click on the link to activate your %s account.';
$MSG['016_a'] = "The site admin will shortly review your account, once your account has been accepted by the admin you will be able to login";
$MSG['016_b'] = "You may now login using your username and password.";
$MSG['860'] = '<p>In the meantime here are some tips to get you started with ' . $system->SETTINGS['sitename'] . '.</p>
<ul>
	<li>Have photos ready when listing an item to sell, reduce the filesize to save time when uploading.</li>
	<li>Featured auctions are much more likely to sell, your auction will be randomly featured on the ' . $system->SETTINGS['sitename'] . ' Home page.</li>
</ul>';
$MSG['861'] = 'Search auctions';
$MSG['862'] = 'Login to continue';
$MSG['863'] = '<h2>Not a Member yet?</h2>
		<h3><a href="register.php">Register Now</a><br>
		It will only take a minute</h3>
		<p> Becoming a member enables you to:</p>
		<ul>
			<li>Sell anything</li>
			<li>Be notified when an item you are looking for is listed</li>
			<li>Add items to your watchlist</li>
			<li>Bid on items</li>
			<li>plus a whole lot more</li>
		</ul>';
$MSG['864'] = 'Shipping Details';
$MSG['865'] = 'Listing Details';
$MSG['867'] = 'Pick up only';
$MSG['868'] = ' each';
$MSG['869'] = 'Sale Date';
$MSG['870'] = 'You have sold %s items';

$MSG['890'] = "Purge Log";
$MSG['891'] = "Error Log";
$MSG['892'] = "To be activated";
$MSG['893'] = "Total";
$MSG['894'] = "User Settings";
$MSG['895'] = "User Settings Updated";
$MSG['898'] = "Paid";
$MSG['899'] = "Set as Paid";
$MSG['900'] = "View Winners";
$MSG['901'] = "Number of items";
$MSG['902'] = "HTML";
$MSG['903'] = "In which format do you want to receive your emails";
$MSG['904'] = "This auction is closed";
$MSG['905'] = "Someone Wants You To Check Out An Auction";
$MSG['906'] = "Your Bid Is No Longer The Winner";
$MSG['907'] = " - Your Item Sold!";
$MSG['908'] = " - No Winner";
$MSG['909'] = " Auction Closed - You Have Won Item";
$MSG['910'] = "No auctions exist for this user.";
$MSG['911'] = "closed";
$MSG['915'] = "Text";
$MSG['922'] = "Send question to seller";
$MSG['923'] = "Seller location";
$MSG['924'] = "Just Listed";
$MSG['925'] = "Closing Soon";
$MSG['926'] = "Big Ticket";
$MSG['927'] = "Very Expensive";
$MSG['928'] = "Cheap Items";
$MSG['929'] = "Popular Items";
$MSG['930'] = "Hot Items";
$MSG['931'] = "Buy Now";
$MSG['932'] = "Listings posted by %s";
$MSG['933'] = "Buy Now Only";
$MSG['934'] = "for user: ";
$MSG['935'] = 'Balance Payment';
$MSG['936'] = 'Some error has occurred with your submission please try again';
$MSG['937'] = "Name missing";
$MSG['938'] = "Username missing";
$MSG['939'] = "Password missing";
$MSG['940'] = "Please enter your password twice";
$MSG['941'] = "E-mail address missing";
$MSG['942'] = "Address missing";
$MSG['943'] = "City missing";
$MSG['944'] = "Province missing";
$MSG['945'] = "Country missing";
$MSG['946'] = "ZIP/Post code missing";
$MSG['947'] = "Telephone missing";
$MSG['948'] = "Date of birth missing or incomplete";
$MSG['949'] = "Closes ";
$MSG['950'] = "%s bids";
$MSG['951'] = "No Buy Now<br>for this item";
$MSG['1000'] = "Search keywords or item number";
$MSG['1001'] = "Search Title <b>and</b> Description";
$MSG['1002'] = "Search in Categories";
$MSG['1003'] = "Price Range";
$MSG['1004'] = "Between";
$MSG['1005'] = " and ";
$MSG['1006'] = "Payment Choice";
$MSG['1008'] = "Located In";
$MSG['1009'] = "Ending";
$MSG['1010'] = "Today";
$MSG['1011'] = "Tomorrow";
$MSG['1012'] = "in 3 Days";
$MSG['1013'] = "in 5 Days";
$MSG['1014'] = "Sort by";
$MSG['1015'] = "Items Ending First";
$MSG['1016'] = "Newly Listed Items First";
$MSG['1017'] = "Lowest Prices First";
$MSG['1018'] = "Highest Prices First";
$MSG['1020'] = "Dutch Auction";
$MSG['1021'] = "Standard Auction";
$MSG['1022'] = "SSL Support";
$MSG['1023'] = "Activate SSL support?";
$MSG['1024'] = "<p>If you have SSL support on the server where you are running WeBid, you may want to give your customers a safer environment to operate.</p>Once The SSL Support is activated, your users will operate under secure HTTPS transactions when they log in or register.";
$MSG['1029'] = "Counters updated";
$MSG['1030'] = "Re-sync the user, auction and bid counters";
$MSG['1031'] = "Re-sync Counters";
$MSG['1032'] = "no winner";

// Invoices & tax system
$MSG['1033'] = 'Packing Slip';
$MSG['1034'] = 'Auction ID';
$MSG['1035'] = 'Order/Invoice';
$MSG['1036'] = 'Order Date';
$MSG['1037'] = 'BUYER';
$MSG['1038'] = 'SHIP TO';
$MSG['1039'] = 'Invoice Information';
$MSG['1040'] = 'Order Details';
$MSG['1041'] = 'Invoice No.';
$MSG['1042'] = 'Order ID:';
$MSG['1043'] = 'Invoice Date:';
$MSG['1044'] = 'Product';
$MSG['1045'] = 'Tax';
$MSG['1046'] = 'Unit Price (excl.)';
$MSG['1047'] = 'Unit Price (incl.)';
$MSG['1048'] = 'Total (excl.)';
$MSG['1049'] = 'Total (incl.)';
$MSG['1050'] = 'Sub-Total:';
$MSG['1051'] = 'Shipping:';
$MSG['1052'] = 'VAT 20%:';
$MSG['1053'] = 'Total:';
$MSG['1054'] = 'Shipping Method';
$MSG['1055'] = 'Payment Method';
$MSG['1056'] = 'You need to select an order to print a Packing Slip.';
$MSG['1057'] = 'List invoices';
$MSG['1058'] = 'View invoice';
$MSG['1059'] = 'Invoice List';
$MSG['1060'] = 'Invalid Invoice.';
$MSG['1060a'] = 'Print this page';

// admin general
$MSG['1061'] = 'Notes';

// admin help page
$MSG['1062'] = 'Get Support';
$MSG['1063'] = 'Support forums';
$MSG['1064'] = 'If you any problems or questions head over our great support forum and get help from one of our many active users.';
$MSG['1065'] = 'Online documentation';
$MSG['1066'] = 'Unsure of how something works or where something is check out WeBids online documentation';
$MSG['1067'] = 'Commonly Asked Questions and Their Solutions';
$MSG['1068'] = 'Modify WeBid';
$MSG['1069'] = 'Download Themes';
$MSG['1070'] = 'Browse the large collection of user submitted themes that can instantly spruce up any site';
$MSG['1071'] = 'Download Mods';
$MSG['1072'] = 'Browse the large collection of user submitted mods that can add or almost anything to get your site working just how you want it to';
$MSG['1073'] = 'Download Language Pack';
$MSG['1074'] = 'Browse the collection of user submitted translations';
$MSG['1075'] = 'Support WeBid';
$MSG['1076'] = 'Submit a bug';
$MSG['1077'] = 'Found something functioning funny? Tell us about it, it will help others out too';
$MSG['1078'] = 'Suggest a feature';
$MSG['1079'] = 'Have a great idea of what could improve WeBid? Tell us about it we\'re always looking for good ideas';
$MSG['1080'] = 'Donate';
$MSG['1081'] = 'Help keep us online and keep future developments coming';

// tax admin
$MSG['1082'] = 'Tax Name';
$MSG['1083'] = 'Tax Rates';
$MSG['1084'] = 'Sellers from';
$MSG['1085'] = 'Buyers from';
$MSG['1086'] = 'Site Tax';
$MSG['1087'] = 'Are you sure you want to delete this tax rate';
$MSG['1088'] = 'Tax Settings';
$MSG['1089'] = 'Tax settings updated';
$MSG['1090'] = 'Tax Enabled';
$MSG['1091'] = 'Global setting to enable or disable tax';
$MSG['1092'] = 'Users can charge tax';
$MSG['1093'] = 'Enable to give users an option to tax their items';

// admin invoice settings
$MSG['1094'] = 'Invoice Settings';
$MSG['1095'] = 'Invoice settings updated';
$MSG['1096'] = 'Invoice Notice';
$MSG['1097'] = 'This will show in a yellow box above the end message on users invoices';
$MSG['1098'] = 'Invoice End Message';
$MSG['1099'] = 'This will show at the end of every users invoice';

// sell.php tax
$MSG['1102'] = 'Charge Tax';
$MSG['1103'] = 'Include tax in final sell price';

$MSG['1104'] = 'Add to balance';
$MSG['1105'] = 'Select the images you wish to delete <strong>(This cannot be undone)</strong>';
$MSG['1106'] = 'Print packing slip';

$MSG['1107'] = 'Item has not been shipped';
$MSG['1108'] = 'Set as Received';
$MSG['1109'] = 'Item Received';

$MSG['1116'] = 'Set as Shipped';
$MSG['1117'] = 'Shipped';

// email settings
// modal and js
$MSG['1134'] = "Email Test and Response";
$MSG['1135'] = "Enter a message for the test email.";
$MSG['1136'] = "Send Test Email";
$MSG['1137'] = "Email Test";
$MSG['1138'] = "Test email from Admin";
$MSG['1139'] = "Admin";
$MSG['1140'] = "I have finished testing";
// fee gateway
$MSG['1142'] = "Before you can set up any fees you must set up at least one account where the fees can be paid to, to do so simply add your payment info into the corresponding boxes below";
$MSG['1143'] = "Here you setup which payment gateways you want to allow users to use";
$MSG['1144'] = "Before you can set fees you need to of set up at least one method of payment. You can do this via <a href=\"fee_gateways.php\">payment gateways</a>.";

// yourauctions pages
$MSG['1145'] = "<p>You have successfully deleted %s auction(s)</p>";
$MSG['1146'] = "<p>You have successfully re-listed %s auction(s)</p>";
$MSG['1147'] = "<p>You have successfully sold %s auction(s)</p>";
$MSG['1148'] = "<p>A charge of %s has been made to your account</p>";
$MSG['1149'] = "<p>You have successfully closed %s auction(s)</p>";
$MSG['1150'] = "<p>You have successfully started %s auction(s)</p>";
$MSG['edit_disabled'] = "Edit Disabled, Item has Bids";
$MSG['delete_auction_disabled'] = "Delete Disabled, Item has Bids";
$MSG['no_bids'] = "No Bids";
$MSG['click_to_edit_auction'] = "Click to edit this auction";

// sell item page
$MSG['1151'] = "Auction fee";
$MSG['1152'] = "Free";

$MSG['1153'] = 'Print Invoice';

$MSG['5000'] = 'You must be logged in to see this page';
$MSG['5001'] = "View Site";
$MSG['5002'] = "You must be logged in to bid";
$MSG['5022'] = "USERS SEARCH";
$MSG['5023'] = "Search &gt;&gt;";
$MSG['5024'] = "Name, username or e-mail";
$MSG['5029'] = "GO >>";
$MSG['5030'] = "Message Boards";
$MSG['5031'] = "New Message Board";
$MSG['5034'] = "Board Title";
$MSG['5035'] = "Messages to show";
$MSG['5036'] = "This is the number of most recent messages to show for this message board.";
$MSG['5038'] = "Active";
$MSG['5039'] = "Inactive";
$MSG['5052'] = "Edit Message Board";
$MSG['5053'] = "Last Message";
$MSG['5056'] = "You are not logged in.<br>If you post a message it will appear as posted by <b><i>Unknown user</i></b>.";
$MSG['5057'] = "Post Message";
$MSG['5058'] = "Back to message boards";
$MSG['5059'] = "Messages";
$MSG['5060'] = "Posted by ";
$MSG['5061'] = "Unknown user";
$MSG['5062'] = "View all messages";
$MSG['5063'] = "View Messages";
$MSG['5065'] = "Delete all messages older than";
$MSG['5068'] = "Words Filter";
$MSG['5069'] = "The Words Filter option gives you the possibility to eliminate undesired words from:
<ul>
<li>TITLE and DESCRIPTION of the auctions.</li>
<li>Messages posted to the message boards</li>
<li>Usernames</li>
</ul>";
$MSG['5070'] = "Enable Words Filter?";
$MSG['5071'] = "Undesired words list";
$MSG['5072'] = "Enter the undesired words one per line (max. 255 characters per line). Note that each line will be
treated like \"one word\".";
$MSG['5073'] = "Words Filter Settings Updated";
$MSG['5075'] = "Terms &amp; Conditions Page";
$MSG['5081'] = "Activate this option if you want a <u>Terms &amp; Conditions</u> link to appear in the footer of your pages.";
$MSG['5082'] = "Activate Terms &amp; Conditions page?";
$MSG['5083'] = "Terms &amp; Conditions page content<br>(HTML allowed)";
$MSG['5084'] = "Terms &amp; Conditions Settings Updated";
$MSG['5085'] = "About Us";
$MSG['5086'] = "Terms &amp; Conditions";
$MSG['5094'] = "View auctions";
$MSG['5113'] = "Change";
$MSG['5115'] = "days";
$MSG['5117'] = "Page";
$MSG['5118'] = "of";
$MSG['5119'] = "&lt;&lt;Prev";
$MSG['5120'] = "Next&gt;&gt;";
$MSG['5142'] = "Settings";
$MSG['5143'] = "View Access Statistics";
$MSG['5144'] = "Please, choose below if you want WeBid to generate access statistics for your site.";
$MSG['5145'] = "Generate user access statistics";
$MSG['5146'] = "Generate browser and platform statistics";
$MSG['5148'] = "Statistics Settings Updated.";
$MSG['5149'] = "Activate Statistics?";
$MSG['5150'] = "Select which type of statistics you want to generate";
$MSG['5156'] = "Platforms";
$MSG['5158'] = "Access Statistics for ";
$MSG['5161'] = "Page views";
$MSG['5162'] = "Unique visitors";
$MSG['5163'] = "User sessions";
$MSG['5164'] = "Totals";
$MSG['5165'] = "View Browser Statistics";
$MSG['5167'] = "Browser Statistics for ";
$MSG['5169'] = "Browser";
$MSG['5180'] = "User";
$MSG['5189'] = "Submit Auction";
$MSG['5190'] = "Reset Fields";
$MSG['5199'] = "Confirm bid";
$MSG['5201'] = "Post message";
$MSG['5202'] = "Add to your watch list";
$MSG['5202_0'] = "Remove from your watch list";
$MSG['5204'] = "Insert";
$MSG['5205'] = "Enable/Disable";
$MSG['5227'] = "View Suspended Auctions";
$MSG['5230'] = "FAQs Categories";
$MSG['5231'] = "New FAQ";
$MSG['5232'] = "Manage FAQs";
$MSG['5233'] = "Other Settings";
$MSG['5234'] = "Insert New Category";
$MSG['5236'] = "FAQs";
$MSG['5237'] = "CAT. ID";
$MSG['5238'] = "FAQ's category";
$MSG['5239'] = "Question";
$MSG['5240'] = "Answer<br>(HTML allowed)";
$MSG['5243'] = "Help Index";
$MSG['5245'] = "Top";
$MSG['5276'] = "Delete Message";
$MSG['5279'] = "Back to the user list";
$MSG['5280'] = "Years/Months";
$MSG['5281'] = "Monthly Report";
$MSG['5284'] = "Category Name";
$MSG['5285'] = "Daily Report";
$MSG['5291'] = "Active users";
$MSG['5292'] = "Account never confirmed";
$MSG['5293'] = "Sign up fee not paid";
$MSG['5294'] = "Suspended by the admin";
$MSG['5295'] = "View";
$MSG['5296'] = "All users";
$MSG['5297'] = "Balance over debt limit";
$MSG['5299'] = "Limit submission to";
$MSG['5300'] = " messages sent.";
$MSG['5318'] = "View Platform Statistics";
$MSG['5408'] = "Max. ";
$MSG['5431'] = "Send me a new password";
$MSG['5436'] = "Tools";
$MSG['5438'] = "Platform Statistics for ";
$MSG['5492'] = "items";
$MSG['5493'] = "bid";
$MSG['5494'] = "bid for ";
$MSG['5495'] = "for each ";
$MSG['5506'] = "Positive feedback: ";
$MSG['5507'] = '<span style="color:#CD0000;">Negative feedback:</span> ';
$MSG['5508'] = "Member since ";
$MSG['5509'] = "Feedback received ";
$MSG['_0001'] = "Under Maintenance Page";
$MSG['_0002'] = "You can temporary disable the access to your site if necessary.<br>
			In Maintenance mode only one user will have access to it. After you registered a user via <a target=\"_new\" href=\"../register.php\">the usual users registration page</a>
			, insert below the username. After switching the site to Maintenance mode <a target=\"_new\" href=\"../user_login.php\">login here</a> to access the site.";
$MSG['_0004'] = "Under Maintenance HTML code";
$MSG['_0005'] = "Under Maintenance settings updated";
$MSG['_0006'] = "Switch site to \"Under Maintenance\" mode?";
$MSG['_0012'] = "User Management";
$MSG['_0022'] = "Company";
$MSG['_0024'] = "Manage Banners";
$MSG['_0025'] = "Banners";
$MSG['_0026'] = "Add User";
$MSG['_0028'] = "Delete selected users (banners will be deleted)";
$MSG['_0029'] = "Select banner";
$MSG['_0030'] = "URL";
$MSG['_0031'] = "Text under banner";
$MSG['_0032'] = "ALT text";
$MSG['_0033'] = "<b>Filters</b>";
$MSG['_0035'] = "Keywords";
$MSG['_0036'] = "Accepted formats: GIF, JPG, PNG, SWF";
$MSG['_0037'] = "Complete URL including http://";
$MSG['_0038'] = "Can be left blank";
$MSG['_0039'] = "You have the ability to filter the banners rotations with two different criteria:
			<ul>
			<li><b>Categories</b>: select below one or more categories. The banner will appear only when the selected categories are visible (i.e. browsing categories, auction page)
			<li><b>Keywords</b>: enter one or more keywords (one per line). The banner will only appear in those auctions page where at least one keyword is contained in the item's title or description
			</ul>
			The <b>Categories</b> filter will be applied in the browse categories pages and in the items' pages.<br>
			The <b>Keywords</b> filter will be only applied in the auctions page.<br>
			If none of the filters applied match, a random banner (among those with no filters associated) will be shown.";
$MSG['_0040'] = "Add banner";
$MSG['_0041'] = "New banner";
$MSG['_0042'] = " (required)";
$MSG['_0043'] = "<b>User Banners</b>";
$MSG['_0045'] = "Views purchased";
$MSG['_0046'] = "Zero or blank means unlimited views";
$MSG['_0047'] = "%s already exists";
$MSG['_0049'] = "Views:";
$MSG['_0050'] = "URL:";
$MSG['_0051'] = "Clicks:";
$MSG['_0052'] = "View filters";
$MSG['_0053'] = "<b>Categories</b>";
$MSG['_0054'] = "<b>Keywords</b>";
$MSG['_0055'] = "Edit Banner";
$MSG['_0151'] = " times";
$MSG['_0153'] = "Relists / <br>Relisted";
$MSG['_0161'] = "Automatic Relists";
$MSG['_0162'] = "You can choose to automatically relist your auction, if no bids have been posted.";
$MSG['_0163'] = "View Winners";

$MSG['2_0004'] = "View User's IPs";
$MSG['2_0026'] = "We're sorry but, for one or more reasons, you have been denied access to
				this site.<br>
				If you had any active auctions listed, we have cancelled all bids and
				removed the item(s) from our database.
				<br><br>
				Thank you";
$MSG['2_0027'] = "Your IP has been banned";
$MSG['2__0001'] = "Choose language";
$MSG['2__0002'] = "Multilingual support";
$MSG['2__0003'] = "<br>The default language is English.<br>
				If you want to enable multilingual support or change the default language you must follow the steps below:
				<ul>
				<li>If you want to add a new language make a duplicate of language/EN and name it with the
				appropriate name: i.e. if you are translating to French you will need to name the directory FR
				<br>
				The first thing is to define the characters encoding your language requires at the top of the messages file.
				The variable you must edit is <i>\$CHARSET</i>. UTF-8 encoding should work with almost all the languages.<br>
				Next you'll have to define the document reading direction. The variable to modify is <i>\$DOCDIR</i>
				and can have two possible values:
				<ul>
				<li><b>ltr</b> (left-to-right): this is the default and means the text must be read from left to right
				<li><b>rtl</b> (right-to-left): means the text must be read from right to left (i.e. Arabian, Hebrew, etc)
				</ul>
				Once changed <i>\$CHARSET</i> and <i>\$DOCDIR</i> according to the language you are translating into,
				you will have to translate all the error messages and user interface messages contained in the messages file.

				<li>You will then need the flag(s) GIFs for the languages you are going to use, in the images/flags directory.
				Get the flag(s) you need and change the file name(s) to be XX.gif, where XX is the language code for your country language.
				<br>Copy the renamed flag file(s) in the images/flags/ directory.
				<br><b>Note:</b> for each translation, you need the corresponding XX.gif file in images/flags/
				<li>Select the default language below. All the other available languages will be available in the home page (the corresponding flags will be shown).
				</ul>
				";
$MSG['2__0004'] = "Default language";
$MSG['2__0005'] = '<span style="color:#CD0000;"><b>Current default language</b></span>';
$MSG['2__0016'] = "Starting date";
$MSG['2__0025'] = "Buy it now";
$MSG['2__0027'] = "All";
$MSG['2__0028'] = "Select All";
$MSG['2__0029'] = "You have no messages";
$MSG['2__0030'] = " means the entry cannot be deleted because it's in use.";
$MSG['2__0031'] = "Are you sure you want to delete these messages?";
$MSG['2__0037'] = "Submit auction";
$MSG['2__0038'] = "Select your category";
$MSG['2__0039'] = "If you lost your password, please enter your username and e-mail address below.";
$MSG['2__0041'] = "Select secondary category";
$MSG['2__0047'] = "Select Category";
$MSG['2__0048'] = "Close Now!";
$MSG['2__0050'] = "Sell similar";
$MSG['2__0051'] = "Relist";
$MSG['2__0054'] = '<span style="#CD0000;"><b>Already selected</b></span>';
$MSG['2__0056'] = "Suspended auctions";

$MSG['2__0064'] = "USERS ONLINE";
$MSG['2__0066'] = "Enabled";
$MSG['2__0067'] = "Disabled";
$MSG['25_0001'] = "WINNER";
$MSG['25_0002'] = "SELLER";
$MSG['25_0004'] = "User name";
$MSG['25_0005'] = 'User Registration Fields';
$MSG['25_0006'] = "Final bid";
$MSG['25_0008'] = "Preferences";
$MSG['25_0009'] = "Interface";
$MSG['25_0010'] = "Users";
$MSG['25_0011'] = "Advertisement";
$MSG['25_0012'] = "Fees";
$MSG['25_0018'] = "Contents";
$MSG['25_0023'] = "Statistics";
$MSG['25_0025'] = "Settings Overview";
$MSG['25_0026'] = "Batch Process (cron.php)";
$MSG['25_0027'] = "Be sure to set up a cronjob to run cron.php periodically (15 minutes is usually a good time interval).";
$MSG['25_0031'] = "Statistics";
$MSG['25_0032'] = " minutes";
$MSG['25_0033'] = " seconds";
$MSG['25_0035'] = "Time Correction";
$MSG['25_0036'] = "GMT";
$MSG['25_0037'] = " hours";
$MSG['25_0055'] = "Registered Active Users";
$MSG['25_0056'] = "Suspended Users";
$MSG['25_0057'] = "Live Auctions";
$MSG['25_0059'] = "Bids on live auctions";
$MSG['25_0063'] = "Today's Accesses";
$MSG['25_0074'] = "Resend e-mail";
$MSG['25_0079'] = "Newsletter";
$MSG['25_0080'] = "Summary";
$MSG['25_0081'] = "My Account";
$MSG['25_0082'] = "Selling";
$MSG['25_0083'] = "Buying";
$MSG['25_0084'] = "Add a new item keyword";
$MSG['25_0085'] = "Remember me";
$MSG['25_0086'] = "By clicking the button below, you commit to pay the full <b id=\"bidcost\">%s</b> thus buying the item from the seller if you are the winning bidder";
$MSG['25_0087'] = "You have been outbid";
$MSG['25_0088'] = "You are the current highest bidder";
$MSG['25_0089'] = "Congratulations, the item is yours. Please pay now";
$MSG['25_0110'] = "Acceptance Text";
$MSG['25_0115'] = "Pending auctions";
$MSG['25_0116'] = "Will start";
$MSG['25_0117'] = "Will end";
$MSG['25_0118'] = "Start now!";
$MSG['25_0119'] = "Sold Items";
$MSG['25_0121'] = "Closed on";
$MSG['25_0136'] = "Requires administrator's approval";
$MSG['25_0140'] = "Your account is a buyer account. No selling activity is allowed.<br> If you want to switch to a <b>seller account</b> ";
$MSG['25_0141'] = "Send a request to the site administrator";
$MSG['25_0142'] = "Request sent to the site's administrator.";
$MSG['25_0143'] = "Your account is a buyer account. No selling activity is allowed.<br> You already sent a request to switch to a <b>seller account</b>: your request is being processed. ";
$MSG['25_0151'] = "Users Authentication";
$MSG['25_0151_a'] = "Users Confirmation Method";
$MSG['25_0152'] = "If this is enabled the users will be asked to enter their password before completing actions such as leaving feedback, submitting an auction or leaving a bid.";
$MSG['25_0152_a'] = "On WeBid each users account must be activated before it can be used. Choose which method you want to use";
$MSG['25_0152_b'] = "The admin must activate each account.";
$MSG['25_0152_c'] = "User must activate their own account";
$MSG['25_0152_d'] = "Users account is automatically activated on registration (not recommended)";
$MSG['25_0155'] = "Contact seller Updated";
$MSG['25_0167'] = "icon";
$MSG['25_0168'] = "Return to editing";
$MSG['25_0169'] = "Membership Levels";
$MSG['25_0169a'] = "Check Version";
$MSG['25_0170'] = "Edit, delete or add membership levels using the form below. \"Points\" means up limit (min level is implicit), \"membership\" is the name of the level, \"icon\" is the name of the icon corresponding to the level to be displayed, relative to the \"images/icons/\" directory";
$MSG['25_0171'] = "Feedback score";
$MSG['25_0176'] = "Convert";
$MSG['25_0177'] = "for";
$MSG['25_0178'] = "HTML meta Tags";
$MSG['25_0180'] = "Meta Description Tag";
$MSG['25_0181'] = "Meta Keywords Tag";
$MSG['25_0182'] = "The Meta Description Tag is usually used to describe your pages in the search results pages search engines show.<br>
				Enter the text which better describes your site below.";
$MSG['25_0184'] = "The Meta Keywords Tag gives some search engines additional information to use to index your site.<br>
				Enter the your keywords below separated by comas (i.e. books, books auctions, book sales).";
$MSG['25_0185'] = "Meta Tags Settings Updated";
$MSG['25_0188'] = "Auctions notification e-mails";
$MSG['25_0189'] = "As a seller, you can choose to receive one notification e-mail for each auction which closes, or to receive an e-mail once a day reporting all the closed auctions on that day.<br>
				The second option is usually necessary if you have a huge number of auctions.<br>Finally you can also choose not to receive any notification e-mail but this choice is not recommended.";
$MSG['25_0190'] = "Receive <b>one</b> e-mail for each closing auction";
$MSG['25_0191'] = "Receive one cumulative e-mail once a day";
$MSG['25_0192'] = "E-mails notification options updated";
$MSG['25_0193'] = "Do not receive any e-mail";
$MSG['25_0195'] = "You can choose to receive a notification e-mail for each auction you set up or to not receive it.";
$MSG['25_0196'] = "Receive the <b>auction setup confirmation e-mail</b>.";
$MSG['25_0197'] = "Do not Receive the <b>auction setup confirmation e-mail</b>.";
$MSG['25_0199'] = "Closing auctions resume";
$MSG['25_0209'] = "Sell under reserved price to highest bidder";
$MSG['25_0214'] = "Search also closed auctions: ";
$MSG['25_0215'] = "Shipping terms";
$MSG['25_0223'] = "Feedback you've received";
$MSG['25_0224'] = "Preview";

// multi-language months
$MSG['MON_001'] = "Jan";
$MSG['MON_001E'] = "January";
$MSG['MON_002'] = "Feb";
$MSG['MON_002E'] = "February";
$MSG['MON_003'] = "Mar";
$MSG['MON_003E'] = "March";
$MSG['MON_004'] = "Apr";
$MSG['MON_004E'] = "April";
$MSG['MON_005'] = "May";
$MSG['MON_005E'] = "May";
$MSG['MON_006'] = "Jun";
$MSG['MON_006E'] = "June";
$MSG['MON_007'] = "Jul";
$MSG['MON_007E'] = "July";
$MSG['MON_008'] = "Aug";
$MSG['MON_008E'] = "August";
$MSG['MON_009'] = "Sep";
$MSG['MON_009E'] = "September";
$MSG['MON_010'] = "Oct";
$MSG['MON_010E'] = "October";
$MSG['MON_011'] = "Nov";
$MSG['MON_011E'] = "November";
$MSG['MON_012'] = "Dec";
$MSG['MON_012E'] = "December";

$MSG['26_0000'] = "Set Default";
$MSG['26_0001'] = "Bids history";
$MSG['26_0002'] = "Manage Themes";
$MSG['26_0003'] = "Edit Theme Files";
$MSG['26_0004'] = "Add Theme File";
$MSG['26_0005'] = "Default Theme Updated";
$MSG['30_0053'] = "<p>Some free e-mail services have been banned from this website. Please do not enter e-mail addresses belonging to the following domains:</p>";
$MSG['30_0063'] = "Buy it now only?";
$MSG['30_0069'] = "Seller: edit this auction";
$MSG['30_0070'] = "Search only in this category";
$MSG['30_0080'] = "Payment Options";
$MSG['30_0081'] = "Viewed ";
$MSG['30_0086'] = "Address: ";
$MSG['30_0087'] = "Are you sure you want to process the selected auctions?";
$MSG['30_0098'] = "&nbsp; = Outbid";
$MSG['30_0100'] = "<b>Buy it now!</b> auctions";
$MSG['30_0101'] = "<b>Buy it now only</b> auctions";
$MSG['30_0102'] = "Check/Uncheck All";
$MSG['30_0176'] = "View Winners";
$MSG['30_0177'] = "Auction ended";
$MSG['30_0178'] = "&nbsp;&nbsp;No winners found for this auction";
$MSG['30_0179'] = "Winning bid";
$MSG['30_0180'] = "Complete Bid History";
$MSG['30_0181'] = "Message Board";
$MSG['30_0208'] = "Place bid >>";
$MSG['30_0209'] = "Meet the seller";
$MSG['30_0210'] = "*When items relating to these key words are listed you will be notified via email";
$MSG['30_0213'] = "No feedback needs leaving";
$MSG['30_0214'] = "WeBid Version";
$MSG['30_0215'] = "Upload Logo";
$MSG['upload_failed'] = 'Upload failed';
$MSG['30_0110'] = "Shipping";
$MSG['350_1004'] = "Quantity";
$MSG['350_1008'] = "Additional Shipping";
$MSG['350_1009'] = "Additional Shipping Cost";
$MSG['RPT_22'] = 'User ID';
$MSG['RPT_23'] = '(leave blank for all)';
$MSG['email_settings_updated'] = 'Email settings updated';

$MSG['NAY_01'] = 'Featured Items';
$MSG['NAY_02'] = 'All Items';
$MSG['NAY_03'] = "Site Theme";
$MSG['NAY_04'] = "Admin Theme";

$MSG['AUCTIONS_401'] = "Bid";
$MSG['AUCTIONS_402'] = "Bids";
$MSG['AUCTIONS_404'] = "Sold";
$MSG['AUCTIONS_405'] = "Winning Bid";
$MSG['AUCTIONS_406'] = "Winners";

$MSG['BUY_NOW_ONLY_TPL_0100'] = "Recently Closed Auction Report";

$MSG['auction_has_been_reported'] = "This auction has been reported";
$MSG['item_report_captcha_type'] = "Captcha type on item report page";
$MSG['report_this_item'] = "Report this item";
$MSG['view_reported_auctions'] = "View Reported Auctions";
$MSG['report_item'] = "Report item";
$MSG['reason_for_report'] = "Reason for Report";
$MSG['report_reason_select'] = "Select a reason";
$MSG['report_reason_copy'] = "Copying of your listing";
$MSG['report_reason_counterfeit'] = "Counterfeits and copyright violations";
$MSG['report_reason_prohibited'] = "Prohibited (banned items)";
$MSG['report_reason_terms_and_conditions'] = "Listing policy violations";
$MSG['report_reason_stolen'] = "Stolen property";

$MSG['multilingual_support_settings_updated'] = 'Multilingual Support Settings updated';

$MSG['communative_report_winner_yes'] = 'An email has been sent to the any winner(s) with your email address.';
$MSG['communative_report_winner_no'] = 'Sorry, no auction winner(s) this time.';

$MSG['unknown'] = 'Unknown';
$MSG['empty_line'] = '-----';
$MSG['error_no_user_group'] = 'has not been assigned to any User Groups';
$MSG['error_no_user_group_id'] = 'has been assigned to a Group ID which does not exist any more';
$MSG['text_update_users_group'] = '[Please View and Update each user\'s details]';
$MSG['warning'] = 'Warning';

$MSG['bidding_visable_to_guest'] = 'Buy now visible to guests';
$MSG['bidding_visable_to_guest_explain'] = 'Guest can see the Bid now/Buy now option when viewing an auction, this should be disabled if you plan to run a single seller site';
$MSG['email_admin_on_signup'] = 'Email admin on signup';
$MSG['email_admin_on_signup_explain'] = 'Admin receives an email each time a new user registers';
$MSG['user_request_seller_permission'] = 'Users can request to become sellers';
$MSG['user_request_seller_permission_explain'] = 'Users who do not have permission to sell items can request to gain permission';
$MSG['spam_blocked_email_enabled'] = 'Enable block email domains';
$MSG['spam_blocked_email_domains'] = 'Deny registration from disposable emails';
$MSG['spam_blocked_email_domains_explain'] = 'Put each domain on a new line';
$MSG['spam_blocked_email_domains_register_error'] = 'The E-Mail address you have entered has been black-listed';

$MSG['wordfilter_banned_username'] = 'Please select a different user name as our word filter will not allow this name to be used';

$MSG['custom_end_time'] = 'Set custom end time';
$MSG['or_custom_end_time'] = 'Or set a custom end time';
$MSG['ending_date'] = 'Ending date';

$MSG['payment_name'] = 'Name';
$MSG['clean_payment_name'] = 'Clean Name <small>(all lower case no spaces or special characters)</small>';

$MSG['all_user_groups'] = 'All User Groups';
$MSG['login_required_text'] = "Login required";
$MSG['end_date'] = 'End date';
$MSG['delete'] = 'delete';

$MSG['all_error_messages'] = 'All errors';
$MSG['unique_error_messages'] = 'Unique errors';

$MSG['any_country'] = 'Any Country';

$MSG['prune_unactivated_users'] = "Prune unactivated users";
$MSG['prune_unactivated_users_explain'] = "Automatically delete unactivated user accounts.";

$MSG['prune_unactivated_users_days'] = "Numbers of days before deleting unactivated accounts";
$MSG['prune_unactivated_users_days_explain'] = "Numbers of days before deleting unactivated accounts.";

$MSG['moderation_settings'] = 'Moderation Settings';
$MSG['moderation_disabled'] = 'Disabled';
$MSG['moderation_pre_moderation'] = 'Pre-moderation';
$MSG['moderation_post_moderation'] = 'Post-moderation';

$MSG['auction_moderation'] = 'Auction Moderation';
$MSG['new_auction_moderation'] = 'New auction moderation';

$MSG['moderation_settings_updated'] = "Moderation Settings updated";

$MSG['moderation'] = 'Moderation';
$MSG['moderate_auctions'] = 'Moderate Auctions';
$MSG['moderation_queue'] = 'Moderation Queue';

$MSG['moderator_dismiss'] = 'Dismiss';
$MSG['remove_auction_from_moderation'] = "Remove Auction From Moderation";
$MSG['remove_auction_from_moderation_explain'] = "Are you sure you want to remove this auction from the moderation queue?<br>This action will not reactivate the auction.";

$MSG['auction_awaiting_approval'] = "Your Auction is Awaiting Approval";

// item_watch.php
$MSG['item_watch_item_removed'] = 'Auction removed from watchlist';
$MSG['item_watch_item_added'] = 'Auction added to watchlist';
$MSG['item_watch_not_added'] = 'Auction already on watchlist';

// dates
$MSG['year_s'] = 'year(s)';
$MSG['month_s'] = 'month(s)';
$MSG['day_short'] = 'd';
$MSG['hour_short'] = 'h';
$MSG['minute_short'] = 'm';

// yourmessages.tpl
$MSG['delete_message_confirm'] = 'Are you sure you want to delete this message?';
