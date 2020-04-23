using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Hide : MonoBehaviour {


	public GameObject Plosce;
	public GameObject ImenaPlosce;
    public GameObject ShowHide;

	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}

	public void HideObjects() 
	{
		foreach (GameObject temp in GameObject.FindGameObjectsWithTag("panel"))
        {
			temp.SetActive(false);
        }
		/*foreach (GameObject temp in GameObject.FindGameObjectsWithTag("Slika"))
        {
			temp.SetActive(false);
		}*/
		foreach (GameObject temp in GameObject.FindGameObjectsWithTag("hide"))
        {
            temp.SetActive(false);
        }
        Plosce.SetActive(false);
        ImenaPlosce.SetActive(false);
        ShowHide.SetActive(true);
    
	}
	
}
