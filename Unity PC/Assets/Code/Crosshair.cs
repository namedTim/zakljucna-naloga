using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Crosshair : MonoBehaviour {

    private Animator anim;
	public string Ime;
    public string brezImena;


    // Use this for initialization
    void Start () {
        anim = gameObject.GetComponent<Animator>();
        Ime = "";
    }
	
	// Update is called once per frame
	void Update () {
        /*if (Input.GetButtonDown("Fire1"))
            {
            anim.SetTrigger("Shoot"); //Klic animacije
        }*/
    }

    public void Cross(string brezImena)
    {
        if (!brezImena.Equals(Ime))
        {
            //anim.SetTrigger("Shoot"); //Klic animacije
            anim.Rebind();
            anim.SetTrigger("Shoot");
        }
        Ime = brezImena;

    }
}
