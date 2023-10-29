<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hanuman ji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <div class="container mt-5">
        <div class="mt-5 text-center bg-transparent" id=""><div id="typedtext"></div></div>
    </div>
    

    <audio id="myAudio" controls autoplay>
      <source src="song.mp3" type="audio/mpeg" />
    </audio>
    <script>
      var aText = new Array(
        "जय हनुमान ज्ञान गुन सागर। जय कपीस तिहुं लोक उजागर।।",
        "राम दूत अतुलित बल धामा। अंजनि-पुत्र पवनसुत नामा।।",
        "महाबीर बिक्रम बजरंगी। कुमति निवार सुमति के संगी।।",
        "कंचन बरन बिराज सुबेसा। कानन कुण्डल कुँचित केसा।।",
        "हाथ बज्र औ ध्वजा बिराजे। कांधे मूंज जनेउ साजे।।",
        "शंकर सुवन केसरी नंदन। तेज प्रताप महा जग वंदन।।",
        "बिद्यावान गुनी अति चातुर। राम काज करिबे को आतुर।।",
        "       ",
        "प्रभु चरित्र सुनिबे को रसिया। राम लखन सीता मन बसिया।।",
        "सूक्ष्म रूप धरि सियहिं दिखावा। बिकट रूप धरि लंक जरावा।।",
        "भीम रूप धरि असुर संहारे। रामचन्द्र के काज संवारे।।",
        "लाय सजीवन लखन जियाये। श्री रघुबीर हरषि उर लाये।।",
        "रघुपति कीन्ही बहुत बड़ाई। तुम मम प्रिय भरतहि सम भाई।।",
        "सहस बदन तुम्हरो जस गावैं। अस कहि श्रीपति कण्ठ लगावैं।।",
        "सनकादिक ब्रह्मादि मुनीसा। नारद सारद सहित अहीसा।।",
        "जम कुबेर दिगपाल जहां ते। कबि कोबिद कहि सके कहां ते।।",
        "      ",
        "तुम उपकार सुग्रीवहिं कीन्हा। राम मिलाय राज पद दीन्हा।।",
        "तुम्हरो मंत्र बिभीषन माना। लंकेश्वर भए सब जग जाना।।",
        "जुग सहस्र जोजन पर भानु। लील्यो ताहि मधुर फल जानू।।",
        "प्रभु मुद्रिका मेलि मुख माहीं। जलधि लांघि गये अचरज नाहीं।।",
        "दुर्गम काज जगत के जेते। सुगम अनुग्रह तुम्हरे तेते।।", 
       "राम दुआरे तुम रखवारे। होत न आज्ञा बिनु पैसारे।।",
        "सब सुख लहै तुम्हारी सरना। तुम रक्षक काहू को डर ना।।",
        "आपन तेज सम्हारो आपै। तीनों लोक हांक तें कांपै।।",
        "भूत पिसाच निकट नहिं आवै। महाबीर जब नाम सुनावै।।",
        "नासै रोग हरै सब पीरा। जपत निरंतर हनुमत बीरा।।",
        "           ",
        "संकट तें हनुमान छुड़ावै। मन क्रम बचन ध्यान जो लावै।।",
        "सब पर राम तपस्वी राजा। तिन के काज सकल तुम साजा।।",
        "और मनोरथ जो कोई लावै। सोइ अमित जीवन फल पावै।।",
        "चारों जुग परताप तुम्हारा। है परसिद्ध जगत उजियारा।।",
        "साधु संत के तुम रखवारे। असुर निकंदन राम दुलारे।।",
        "अष्ट सिद्धि नौ निधि के दाता। अस बर दीन जानकी माता।।",
        "राम रसायन तुम्हरे पासा। सदा रहो रघुपति के दासा।।",
        "तुम्हरे भजन राम को पावै। जनम-जनम के दुख बिसरावै।।",
        "अन्तकाल रघुबर पुर जाई। जहां जन्म हरि भक्त कहाई।।",
        "और देवता चित्त न धरई। हनुमत सेइ सर्ब सुख करई।।",
        "संकट कटै मिटै सब पीरा। जो सुमिरै हनुमत बलबीरा।।",
        "जै जै जै हनुमान गोसाईं। कृपा करहु गुरुदेव की नाईं।।",
        "जो सत बार पाठ कर कोई। छूटहि बंदि महा सुख होई।।",
        "जो यह पढ़ै हनुमान चालीसा। होय सिद्धि साखी गौरीसा।।",
        "                                ",

       "तुलसीदास सदा हरि चेरा कीजै नाथ हृदय मंह डेरा"
        
      );

      var x = document.getElementById("myAudio").autoplay; 
      var iSpeed = 58; // time delay of print out
      var iIndex = 0; // start printing array at this posision
      var iArrLength = aText[0].length; // the length of the text array
      var iScrollAt = 4; // start scrolling up at this many lines

      var iTextPos = 0; // initialise text position
      var sContents = ""; // initialise contents variable
      var iRow; // initialise current row

      function typewriter() {
        sContents = " ";
        iRow = Math.max(0, iIndex - iScrollAt);
        var destination = document.getElementById("typedtext");

        while (iRow < iIndex) {
          sContents += aText[iRow++] + "<br />";
        }
        destination.innerHTML =
          sContents + aText[iIndex].substring(0, iTextPos) + "_";
        if (iTextPos++ == iArrLength) {
          iTextPos = 0;
          iIndex++;
          if (iIndex != aText.length) {
            iArrLength = aText[iIndex].length;
            setTimeout("typewriter()", 500);
          }
        } else {
          setTimeout("typewriter()", iSpeed);
        }
      }

      typewriter();
    </script>

<div class="footer">
  <p>By Pulak singh</p>
</div>
  </body>
</html>