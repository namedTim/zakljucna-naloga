﻿using System;
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
        foreach (GameObject temp in GameObject.FindGameObjectsWithTag("infopanel"))
        {
            temp.SetActive(false);
        }
        foreach (GameObject temp in GameObject.FindGameObjectsWithTag("plosca"))
        {
            temp.GetComponent<Renderer>().material = unClick;
        }
        GameObject.Find("Sfera").GetComponent<Renderer>().material = background;
        panel.SetActive(true);

        //GameObject.FindWithTag("plosca").GetComponent<Renderer>().material = unClick;
        GameObject.Find(brezImena).GetComponent<Renderer>().material = matClick;
    }
    
}