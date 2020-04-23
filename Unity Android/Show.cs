using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Show : MonoBehaviour {

	public GameObject Plosce;
	public GameObject ImenaPlosce;
	public GameObject ShowHide;
    public Material unClick;


	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}

	public void ShowObjects() 
	{
		Plosce.SetActive(true);
		ImenaPlosce.SetActive(true);

		foreach (GameObject temp in GameObject.FindGameObjectsWithTag("Prikazi"))
        {
            temp.SetActive(false);
        }
		foreach (GameObject temp in GameObject.FindGameObjectsWithTag("plosca"))
        {
            temp.GetComponent<Renderer>().material = unClick;
        }

        ShowHide.SetActive(true);
        
	}
}
