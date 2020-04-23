using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using System.Threading;

using Valve.VR;

public class customLaser : MonoBehaviour {

    public float RayLength;

    public SteamVR_TrackedObject mTrackedObject;
    public SteamVR_Controller.Device mDevice;
    public string brezImena;
    

    // Use this for initialization
    void Start () {
    }
	
	// Update is called once per frame
	void Update () {
        rayCast();
	}

    void rayCast() {

        RaycastHit hit;

        if (Physics.Raycast(transform.position, transform.TransformDirection(Vector3.forward), out hit)){

            if (hit.transform.gameObject.tag == "plosca")
            {
                viveInput(hit);
            }
            if (hit.transform.gameObject.tag == "Skri")
            {
                ViveHide(hit);
            }
            if (hit.transform.gameObject.tag == "Prikazi")
            {
                Debug.Log(hit.transform.name+" Nekaj Pac");
                ViveShow(hit);
            }

        }

        Debug.DrawRay(transform.position, transform.TransformDirection(Vector3.forward) * RayLength, Color.yellow);

    }

    void viveInput(RaycastHit hit) {

        mDevice = SteamVR_Controller.Input((int)mTrackedObject.index);

        if (mDevice.GetTouchDown(SteamVR_Controller.ButtonMask.Trigger)) {
            //Debug.Log(hit.transform.name+" ime id class ...");   //sprememba
            brezImena = hit.transform.name;
            hit.transform.gameObject.GetComponent<changeBG>().changeMat(brezImena);
            //Thread.Sleep(2000);
        }

    }

    void ViveHide(RaycastHit hit) {
        mDevice = SteamVR_Controller.Input((int)mTrackedObject.index);

        if (mDevice.GetTouchDown(SteamVR_Controller.ButtonMask.Trigger)) {

            hit.transform.gameObject.GetComponent<Hide>().HideObjects();
        }
    }

    void ViveShow(RaycastHit hit) {
        mDevice = SteamVR_Controller.Input((int)mTrackedObject.index);

        if (mDevice.GetTouchDown(SteamVR_Controller.ButtonMask.Trigger)) {

            hit.transform.gameObject.GetComponent<Show>().ShowObjects();
        }
    }
}
