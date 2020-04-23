using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class TextChange : MonoBehaviour
{
    public string[] besedilo = new string[]{"","",""};
    Text spremeni;
    public int n=0;
    private float Cas = 0;
	private bool pog = false;
	private float CasDve = 1;
    public GameObject Nekaj;
    public GameObject Cifra;
    
    void Start()
    {
        spremeni = GetComponent<Text> ();
    }

    void Update()
    {
    }
    
    public bool Pogoj(){

		pog = false;
		Debug.Log("Pogoj: " + pog);
		//Debug.Log("Cas: " + Time.time);



		if(Time.time > Nekaj.GetComponent<TextChange>().Cas){

			Cas = Time.time + CasDve;
			
            Nekaj.GetComponent<TextChange>().Cas = Cas;

			return(true);
			//Debug.Log("True");

		}
		else{

			return(false);
			//Debug.Log("false");

		}
	}
    public void Prestavi(string brezImena){
        pog = Pogoj();

        if (pog == true){

            if(brezImena.Equals("Naprej")){
                n++;
            }
            else{
                n--;
            }
            if(n>besedilo.Length-1){
                n=0;
                }
            else if(n<0){
                n=besedilo.Length-1;
            }
            spremeni.text = besedilo[n];
            Cifra.GetComponent<TextNumChange>().Sprememba();

        }
    }
}
