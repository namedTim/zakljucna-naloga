
using System;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ObjectController : MonoBehaviour
{

  private Renderer myRenderer;
  public Material unClick;
  public Material click;
  public Material background;
  public GameObject panel;
  public String render;

    public float x;
    public float y;
    public int r;




    //public GameObject HIV_window;
    //public GameObject a;

    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

    }

    public void changeMat()
    {
        foreach (GameObject temp in GameObject.FindGameObjectsWithTag("panel"))
        {
            temp.SetActive(false);
        }
        foreach (GameObject temp in GameObject.FindGameObjectsWithTag("button"))
        {
            temp.GetComponent<Renderer>().material = unClick;
        }
        GameObject.Find("Sphere").GetComponent<Renderer>().material = background;
        panel.SetActive(true);

        //GameObject.FindWithTag("plosca").GetComponent<Renderer>().material = unClick;
        GameObject.Find(render).GetComponent<Renderer>().material = click;



        foreach (GameObject temp in GameObject.FindGameObjectsWithTag("show"))
	        {
	            temp.transform.position = new Vector3(x, -22, y);
                temp.transform.rotation = Quaternion.Euler(-20, -r, 0);
	        }
        foreach (GameObject temp in GameObject.FindGameObjectsWithTag("hide"))
	        {
	            temp.transform.position = new Vector3(x, -22, y);
                temp.transform.rotation = Quaternion.Euler(-20, -r, 0);
	        }
    }
}






















/*
using System;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class changeBG : MonoBehaviour
{

    public Material matClick;
    public Material unClick;
    public Material background;
    public GameObject panel;
    public GameObject plosca;
    public float x;
    public float y;
    public int r;
    



    //public GameObject HIV_window;
    //public GameObject a;
    
    // Use this for initialization
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {

    }

    public void changeMat(string brezImena)
    {
        foreach (GameObject temp in GameObject.FindGameObjectsWithTag("panel"))
        {
            temp.SetActive(false);
        }
        foreach (GameObject temp in GameObject.FindGameObjectsWithTag("button"))
        {
            temp.GetComponent<Renderer>().material = unClick;
        }
        GameObject.Find("Sphere").GetComponent<Renderer>().material = background;
        panel.SetActive(true);

        //GameObject.FindWithTag("plosca").GetComponent<Renderer>().material = unClick;
        GameObject.Find(brezImena).GetComponent<Renderer>().material = matClick;

        foreach (GameObject temp in GameObject.FindGameObjectsWithTag("show"))
	        {
	            temp.transform.position = new Vector3(x, -22, y);
                temp.transform.rotation = Quaternion.Euler(20, -r, 0);
	        }
        foreach (GameObject temp in GameObject.FindGameObjectsWithTag("hide"))
	        {
	            temp.transform.position = new Vector3(x, -22, y);
                temp.transform.rotation = Quaternion.Euler(20, -r, 0);
	        }
    }
}
*/