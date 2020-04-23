/*using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class TextChange : MonoBehaviour
{
    public string[] besedilo = new string[]{"","",""};
    Text spremeni;
    public int n=0;
    public string control = "";
    public GameObject Nekaj;
    public GameObject Cifra;

    
    
    void Start()
    {
        spremeni = GetComponent<Text> ();
    }

    void Update()
    {
        return;
    }
    
    public void Prestavi(string control){
            if (control == "left"){
                n--;
            }
            else if (control == "right"){
                n++;
            }
            if(n>besedilo.Length-1){
                n=0;
                }
            else if(n<0){
                n=besedilo.Length-1;
            }
            string fName=besedilo[n].Replace('$','\n'); // converts "clown city$part I" into two lines.
            spremeni.text = fName;
            Cifra.GetComponent<TextNumChange>().Sprememba();


    }
}
*/
using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using System.Linq;

public class TextChange : MonoBehaviour
{
    public string[] besedilo = new string[]{"","",""};
    Text spremeni;
    public int n=0;
    public string control = "";
    public GameObject Nekaj;
    public GameObject Cifra;
    public GameObject Slika;


    public int[] moski;
    public int[] zenski;
    public int[] celo;
    public Material Mo;
    public Material Ze;
    public Material CT;



    
    
    void Start()
    {
        spremeni = GetComponent<Text> ();
    }

    void Update()
    {
        return;
    }
    
    public void Prestavi(string control){
            if (control == "left"){
                n--;
            }
            else if (control == "right"){
                n++;
            }
            if(n>besedilo.Length-1){
                n=0;
                }
            else if(n<0){
                n=besedilo.Length-1;
            }
            string fName=besedilo[n].Replace('$','\n'); // converts "clown city$part I" into two lines.
            spremeni.text = fName;
            Cifra.GetComponent<TextNumChange>().Sprememba();
            

            
            if(moski.Contains(n)){
                Slika.SetActive(true);
                Slika.GetComponent<Renderer>().material = Mo;
            }
            else if(zenski.Contains(n)){
                Slika.SetActive(true);
                Slika.GetComponent<Renderer>().material = Ze;
            }
            else if(celo.Contains(n)){
                
                Slika.SetActive(true);
                Slika.GetComponent<Renderer>().material = CT;
            }
            else{
                Slika.SetActive(false);
            }






    }
}
