using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ShowHide : MonoBehaviour {


	public GameObject Plosce;
	public GameObject ImenaPlosce;
    public GameObject ShowHideButton;
	private float Cas = 0;
	private bool pog = false;
	private float CasDve = 1;



	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}

	public bool Pogoj(){

		pog = false;
		Debug.Log("Pogoj: " + pog);
		//Debug.Log("Cas: " + Time.time);



		if(Time.time > Cas){

			Cas = Time.time + CasDve;
			
			ShowHideButton.GetComponent<ShowHide>().Cas = Cas;

			return(true);
			//Debug.Log("True");

		}
		else{

			return(false);
			//Debug.Log("false");

		}
	}

	public void HideObjects() 
	{
		
		pog = Pogoj();

		if (pog == true){

			ShowHideButton.SetActive(true);
			ShowHideButton.transform.position = transform.position;
            ShowHideButton.transform.rotation = transform.rotation;
			
			foreach (GameObject temp in GameObject.FindGameObjectsWithTag("Skri"))
        	{
        	    temp.SetActive(false);
        	}
        	Plosce.SetActive(false);
        	ImenaPlosce.SetActive(false);
		}
	}

	public void ShowObjects() 
	{
		pog = Pogoj();

		if (pog == true){
			Plosce.SetActive(true);
			ImenaPlosce.SetActive(true);

			ShowHideButton.SetActive(true);
			ShowHideButton.transform.position = transform.position;
            ShowHideButton.transform.rotation = transform.rotation;

			foreach (GameObject temp in GameObject.FindGameObjectsWithTag("Prikazi"))
	        {
	            temp.SetActive(false);
	        }

    	    
		}
	}
	
}
