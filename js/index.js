const dynamicLink=document.getElementById('dynamicLinks');
const videoImgI=document.getElementById('videoYoutubeImgI');
const videoImg=document.querySelector('.videoYoutubeImg');
const videoYoutube=document.querySelector('.videoYoutubeHide');
const logoHoverMenuHide=document.querySelector('.logoHoverMenuHide');
const accMenuBarHide=document.querySelector('.accMenuBarHide');
const men1=document.querySelector('.men1Hide');
const men2=document.querySelector('.men2Hide');

$('.child1-2').click(function () {
    if(logoHoverMenuHide.classList.contains('logoHoverMenuHide'))
    {
        $('.logoHoverMenuHide').toggleClass("logoHoverMenu");
        $('.logoSubMenuBarHide').toggleClass("logoSubMenuBar");
    }
    else
    {
        $('.logoHoverMenu').toggleClass("logoHoverMenuHide");
        $('.logoSubMenuBar').toggleClass("logoSubMenuBarHide");
    }

})

$('.child1-5').click(function () {
    if(accMenuBarHide.classList.contains("accMenuBarHide"))
    {
        $('.accMenuBarHide').toggleClass("accMenuBar");
        $('.accHoverMenuHide').toggleClass("accHoverMenu");
        dynamicLink.innerHTML="";
        dynamicLink.innerHTML+="<li>Übersicht <span id=\"dynamicLinkSpan\"></span></li>";
        dynamicLink.innerHTML+="<li>Nachrichten <span id=\"dynamicLinkSpan\"></span></li>";
        dynamicLink.innerHTML+="<li>Merkzettek <span id=\"dynamicLinkSpan\"></span></li>";
        dynamicLink.innerHTML+="<li>Gespeicherte Suchen <span id=\"dynamicLinkSpan\"></span></li>";
        dynamicLink.innerHTML+="<li>Besichtigungskalender <span id=\"dynamicLinkSpanPlus\">Plus</span></li>";
        dynamicLink.innerHTML+="<li>Wohnen <span id=\"dynamicLinkSpan\">NEW</span></li>";
        dynamicLink.innerHTML+="<li>Umzug <span id=\"dynamicLinkSpan\"></span></li>";
        dynamicLink.innerHTML+="<li>Kaufen <span id=\"dynamicLinkSpan\">NEW</span></li>";
        dynamicLink.innerHTML+="<li>Finanzierung <span id=\"dynamicLinkSpan\"></span></li>";
        dynamicLink.innerHTML+="<li>Einstellungen <span id=\"dynamicLinkSpan\"></span></li>";
        dynamicLink.innerHTML+="<li>Mitgliedschaft <span id=\"dynamicLinkSpanPlus\">Plus </span></li>";
    }
    else
    {
        $('.accMenuBar').toggleClass("accMenuBarHide");
        $('.accHoverMenu').toggleClass("accHoverMenuHide");
    }

})

$('.Suchender').click(function () {
    dynamicLink.innerHTML="";
    dynamicLink.innerHTML+="<li>Übersicht <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Nachrichten <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Merkzettek <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Gespeicherte Suchen <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Besichtigungskalender <span id=\"dynamicLinkSpanPlus\">Plus</span></li>";
    dynamicLink.innerHTML+="<li>Wohnen <span id=\"dynamicLinkSpan\">NEW</span></li>";
    dynamicLink.innerHTML+="<li>Umzug <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Kaufen <span id=\"dynamicLinkSpan\">NEW</span></li>";
    dynamicLink.innerHTML+="<li>Finanzierung <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Einstellungen <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Mitgliedschaft <span id=\"dynamicLinkSpanPlus\">Plus </span></li>";
});

$('.Anbieter').click(function () {
    dynamicLink.innerHTML="";
    dynamicLink.innerHTML+="<li>Übersicht <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Nachrichten <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Immobilienanzeigen <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Eigentümerbereich für Verkäufer <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Besichtigungskalender <span id=\"dynamicLinkSpanPlus\">Plus</span></li>";
    dynamicLink.innerHTML+="<li>VermieterPlus <span id=\"dynamicLinkSpan\">NEW</span></li>";
    dynamicLink.innerHTML+="<li>EigentümerPlus <span id=\"dynamicLinkSpan\"></span></li>";
    dynamicLink.innerHTML+="<li>Immobilientbewertungen<span id=\"dynamicLinkSpan\">NEW</span></li>";
    dynamicLink.innerHTML+="<li>Konto verwalten <span id=\"dynamicLinkSpan\"></span></li>";
})


videoImgI.addEventListener('click',function () {
    videoImg.classList.replace("videoYoutubeImg","videoYoutubeImgHide");
    videoYoutube.classList.replace("videoYoutubeHide","videoYoutube");
})







