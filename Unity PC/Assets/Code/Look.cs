using System.Collections;
using System.Collections.Generic;
using UnityEngine;


public class Look : MonoBehaviour {
	
    public float RayLength;
    public string brezImena;
    public Crosshair moj; //Povezava metode


    // Use this for initialization
    void Start () {

    }
	
	// Update is called once per frame
	void Update () {
        RaycastHit hit;

        //string nekaj = moj.test();
        

        if (Physics.Raycast(transform.position, transform.TransformDirection(Vector3.forward), out hit)) {


            if (hit.transform.gameObject.tag == "plosca")
            {
                brezImena = hit.transform.name;

                moj.Cross(brezImena);  //kljic metode

                hit.transform.gameObject.GetComponent<changeBG>().changeMat(brezImena);  //Kranjcev klic
            }


            else if (hit.transform.gameObject.tag == "Skri")
            {
                moj.Cross(brezImena);

                hit.transform.gameObject.GetComponent<ShowHide>().HideObjects();
            }

            
            else if (hit.transform.gameObject.tag == "Prikazi")
            {
                moj.Cross(brezImena);

                hit.transform.gameObject.GetComponent<ShowHide>().ShowObjects();
            }

            else if (hit.transform.gameObject.tag == "Pozicija")
            {
                
                brezImena = hit.transform.name;

                moj.Cross(brezImena);

                foreach (GameObject temp in GameObject.FindGameObjectsWithTag("Besedilo"))
                {
                    temp.GetComponent<TextChange>().Prestavi(brezImena);
                }
            }
        }
    }
}
