const body = document.querySelector('body');
const scene = document.querySelector('a-scene');
const mikroplazma = "Sem sodijo bakterije Mycoplasma genitalium, Mycoplasma hominis in Ureaplasma. So potencialno patogene bakterije in jih pogosto najdemo v urogenitalnem traktu spolno aktivnih oseb, predvsem žensk. Okužbe z ureoplazmo se prenašajo s tveganimi spolnimi odnosi oziroma s prenosom v maternici na plod ali pri porodu. Naseljujejo sluznico desetine spolno aktivnih moških in več kot polovico spolno aktivnih žensk."
const gonoreja = "Povzroča jo bakterija Neisseria gonorrhoeae. Je po Gramu negativen diplokok. Večinoma prizadene sluznico spolovil, lahko pa tudi sluznico zadnjika, žrela in oči. Nesorazmerno veliko gonoreje je med moškimi, ki imajo spolne odnose z moškimi. Okužba se prenaša z nezaščitenimi vaginalnimi, oralnimi ali analnimi spolnimi odnosi z okuženim spolnim partnerjem. Pri nosečnici lahko pride ob porodu do prenosa gonoreje na novorojencka. Diagnosticiranje: Zdravnik odvzame bris sečnice ali maternicnega vratu ali žrela ali danke, lahko pa tudi vzorec urina za mikrobioloski dokaz prisotnosti bakterije."
const sifilis = "Sifilis povzroča bakterija Treponema pallidum. Je Gam negativna spiroheta. Treponeme povzročajo nastanek neobčutljive razjede na zunanjem spolovilu, v nožnici, danki ali ustih, potem pa kožne izpuščaje in bolnik se počuti podobno, kot bi preboleval gripo. Razjede so prekrite z bakterijami, preko katerih se lahko ob intimnem stiku okužimo. Ti simptomi nato izginejo, vendar bolezen traja, če se bolnik ni ustrezno zdravil, in se razvije v pozno obliko s trajnimi poskodbami možganov in srčne mišice. Sifilis je v začetku popolnoma ozdravljiv z antibiotiki.  "
const klamidija = "Poznamo več vrst klamidijskih okužb. Človek je edini gostitelj Chlamydia trachomatis. Je Gram negativna bakterija. Epidemioloske razsežnosti okužb s C. trachomatis so ogromne - je najpogostejša bakterijska spolno prenosljiva okužba na svetu, ki prizadene predvsem mlade. Poznamo 20 podtipov te vrste klamidije, označujejo jih s črkami in vsi so občutljivi na sulfonamide. V razvitem svetu povzroča akutna obolenja rodil in sečil, dihal in oči. Pri moških najpogosteje povzroča negonokokno vnetje sečnice, vnetje obmodka ali zadnjika, pri ženskah pa negonokokno vnetje materničnega vratu, maternice, jajcevodov oziroma sečnice. Je najpogostejši razlog za neplodnost žensk. "
const trihomonoza = "Trihomonoza je vnetje sečnice ali nožnice, ki ga povzroca okuzba s praživaljo Trichomonas vaginalis. Je najpogostejša nevirusna SPO. Vsako leto se s trihomonasom na novo okuži vec kot 270 milijonov ljudi. Okužba je pogostejsa pri ženskah. Diagnosticiranje: Izvede se laboratorijski test vaginalne sluznice ali sečnice pri moških na trihomonozo. Diagnoza se postavi na podlagi mikroskopskega pregleda. "
const hivAids = "AIDS ali sindrom pridobljene imunske pomanjkljivosti, je končna faza okuzbe z virusom. HIV – virus imunske pomanjkljivosti. HIV predstavlja kronično napredujočo bolezen, katero opredeljujejo značilne novotvorbe in oportunistične okužbe, ki so posledica okvarjenih imunskih mehanizmov. Značilnosti lentivirusov (virusa HIV-1,2 spadata v družino Retroviridae, s 7 rodovi, eden izmed njih je Lentivirus) so: niso onkogeni, se pocasi razmnožujejo; bolezni, ki jih povzročajo, imajo dolgo inkubacijsko dobo, pocasen razvoj kliničnih znakov in kronični potek. "
const hepatitis = "Akutni virusni hepatitis je pogosta nalezljiva bolezen. Poznamo več vrst virusov, ki primarno povzročajo jetrno vnetje – virusi hepatitisa A, B, C, D, E, F, G. ''Abeceda hepatitisov'' še ni zaključena, saj se kopičijo dokazi o obstoju še drugih do sedaj neodkritih virusov, ki primarno povzročajo vnetja jeter. HEPATITIS B IN C, prenos virusa je s telesnimi tekočinami. Okužba se prenasa ob neposrednem stiku z okuženo krvjo, ki se vnese v izpostavljeno telo ali z drugimi telesnimi tekocinami: slina, sperma, vaginalni izloček."
const papiloma = "Humani papilomavirusi (HPV) so spolno prenosljivi virusi in se glavni vzrok za nastanek raka maternicnega vratu, povezani pa so tudi z nastankom drugih rakov tako pri moskih kot zenskah. Poznamo vec kot 200 razlicnih genotipov HPV. Priblizno 45 genotipov je nizkorizicnih (''low – risk'') in povzrocajo manjse spremembe celic maternicnega vratu, ki so brez posledic. Priblizno 12 genotipov velja za visokorizicne (''high – risk'') in povzrocajo spremembe celic maternicnega vratu, ki v redkih primerih pripeljejo do raka. Je ena najpogostejsih spolno prenosljivih okuzb. Vsaj 50% ljudi, ki so spolno aktivni, se bo v zivljenju okuzilo s HPV. "
const herpes = "Genitalni herpes povzroča virus herpes simpleks, ki se prenaša s spolnimi odnosi in neposrednimi stiki okuženih mest. Okužbo lahko zdravimo, vendar ostanemo okuženi vse zivljenje, ker se virus v speči obliki zadržuje v živcnih pletezih ob hrbtenjači in se obcasno zbudi v obliki herpesa. Ponovne izbruhe pospešijo dejavniki kot so vročina, stres in oslabljen imunski sistem. Okuzba se prenaša pri neposrednem stiku z virusom, ki se izloča skozi kozo ali sluznico okužene osebe. "
const sifilis1 = "Sifilis po trajanju delimo na zgodnji sifilis (do enega leta) in pozni sifilis, po načinu okužbe pa na prirojeni in pridobljeni sifilis. Tveganje za prenos ob enkratni izpostavitvi je 60%. Izjemoma se prenaša tudi s poljubom, ugrizom in izredno redko preko okuženih predmetov. Diagnosticiranje: Pri primarnem sifilisu lahko z mikroskopskim pregledom najdemo značilne bakterije iz razjede, največkrat pa se diagnoza postavi iz vzorca krvi z mikrobiolosko preiskavo."
const klamidija1 = "Možnost, da se zdrava ženska okuži od moskega je večja kot obratno: tveganje ob enkratni izpostavitvi okužbi je 20% za moške in do 90% za ženske. Prenaša se z nezaščitenim spolnim stikom z okuženo osebo. Najpomembnejsi dejavnik tveganja je nov spolni partner ali tvegan vzorec spolnega vedenja obeh partnerjev. Diagnosticiranje: Zdravnik odvzame bris sečnice, maternicnega vratu ali zadnjika, lahko pa tudi vzorec urina za mikrobioloski dokaz prisotnosti bakterije ali npr. vzorec iz povečane področne bezgavke."
const hivAids1 = "Imunski sistem organizma počasi propada, kar omogoča razvoj oportunisticnih okužb, malignomov, okvar osrednjega živcevja in drugih bolezenskih stanj. Diagnosticiranje: Zdravnik okužbo s HIV prepozna na podlagi klinične slike (predvsem bolezni, ki opredeljujejo aids) in okužbo potrdi s krvnimi preiskavami. Svojega osebnega zdravnika lahko prosite, da vam odvzame kri in naroči za vas brezplačno testiranje na okuzbo s HIV. Brezplačno, zaupno in anonimno testiranje je dostopno tudi na Kliniki za infekcijske bolezni in vročinska stanja."
const papiloma1 = "Najpogostejši je pri adolescentih in mlajših odraslih, starih od 15 do 25 let. Pred okužbo se je mozno zašcititi s cepivom. V Evropi imamo tri vrste cepiva, ki ščitijo pred dvema, štirimi ali devetimi genotipi HPV. Cepljenje ne zdravi že obstoječih okužb s HPV in njihovih zapletov. Cepijo se tako moški kot ženske. Ker so moški tudi prenašalci okžzbe s HPV, bi cepljenje lahko posredno vplivalo tudi na zmanjšanje pojavljanja raka materničnega vratu pri ženskah. Diagnosticiranje: Odkriva se preko HPV brisa materničnega vratu, ki se ga priporoča narediti pri abnormalnosti PAP (Papanicolaouov test) testa."
const herpes1 = "Virus se lahko prenese na spolnega partnerja, čeprav okuženi ne kaže znakov bolezni, saj se virus lahko kaže brezsimptomno. Diagnosticiranje: Pregled in ustrezne preiskave opravi zdravnik specialist, ki tudi predpiše zdravljenje. Za potrditev diagnoze se lahko odvzame vzorec s kožne spremembe ali sluznice in se ga testira na prisotnost herpes simpleks virusa. "

let number = 1;

function processText(text, position, rotation) {
    let textArr = text.split('\n');
    let lines = [];
    for(let j = 0; j < textArr.length; j++) {
        let characters = false, lineLength = 40;
        let textSplit = textArr[j].split(' ');
        if(textSplit.length <= 1) {
            textSplit = textArr[j].split('');
            characters = true;
            lineLength = 30;
        }
        let line = '';
        for(let i = 0; i < textSplit.length; i++) {
            if(line.length < lineLength) {
                characters ? line += textSplit[i] : line += textSplit[i] + ' ';
                if(i == textSplit.length - 1) {
                    lines.push(line.trim());
                    line = '';
                }
            } else {
                lines.push(line.trim());
                line = '';
                characters ? line += textSplit[i] : line += textSplit[i] + ' ';
            }
        }
        if(j < textArr.length - 1) {
            lines.push(' ');
        }
    }

    let throwawayCanvas = document.createElement('canvas');
    throwawayCanvas.height = 1000;
    throwawayCanvas.width = 1000;
    throwawayCanvas.setAttribute('style', 'display: none');
    throwawayCanvas.setAttribute('id', 'throwaway');

    let context = throwawayCanvas.getContext('2d');
    context.fillStyle = 'transparent'; // rgba(36, 35, 35, 0.5) rgba(255, 255, 255, 0.5)
    context.fillRect(0, 0, throwawayCanvas.width, throwawayCanvas.height);
    context.fillStyle = 'white';
    context.font = '12px Arial';
    let y = 30;
    let width = 0;
    for(let i = 0; i < lines.length; i++) {
        context.fillText(lines[i], 20, y);
        y += 20;
        context.measureText(lines[i]).width > width ? width = context.measureText(lines[i]).width : width = width;
    }

    let canvas = document.createElement('canvas');
    canvas.height = y;
    canvas.width = Math.round(width + 40);
    canvas.setAttribute('style', 'display: none');
    canvas.setAttribute('id', 'textCanvas'+number);
    let ctx = canvas.getContext('2d');
    ctx.drawImage(throwawayCanvas, 0, 0);
    body.appendChild(canvas);

    let plane = document.createElement('a-plane');
    plane.setAttribute('material', 'color: #fff; src: #textCanvas'+number+'; transparent: true');
    plane.setAttribute('width', canvas.width / 50);
    plane.setAttribute('height', canvas.height / 50);
    plane.setAttribute('position', position);
    plane.setAttribute('rotation', rotation);
    plane.setAttribute('class', 'texT'+number);
    scene.appendChild(plane);
    number++;
}
//      processText(georgianText, '0 1 8', '0 180 0');


processText(mikroplazma, '-7.863 -2.135 -2.49', '-10 73.28 0');
processText(gonoreja, '-7.202 -1.517 -4.563', '-10 55.22 0');
processText(sifilis, '-4.917 -1.564 -6.198', '-10 36.44 0');
processText(klamidija, '-2.727 -0.992 -7.626', '-10 16.16 0');
processText(trihomonoza, '0.121 -0.377 -8.314', '-10 0 0');
processText(hivAids, '2.401 -0.671 -7.762', '-10 -17.74 0');
processText(hepatitis, '3.912 -0.785 -6.492', '-10 -34.78 0');
processText(papiloma, '6.240 -0.411 -4.929', '-10 -55.02 0');
processText(herpes, '7.554 -0.291 -2.556', '-10 -72.72 0');
processText(sifilis1, '-4.917 -1.564 -6.198', '-10 36.44 0');
processText(klamidija1, '-2.727 -0.992 -7.626', '-10 16.16 0');
processText(hivAids1, '2.401 -0.671 -7.762', '-10 -17.74 0');
processText(papiloma1, '6.485 -0.21 -4.859', '-10 -55.02 0');
processText(herpes1, '7.554 0.370 -2.556', '-10 -72.72 0');