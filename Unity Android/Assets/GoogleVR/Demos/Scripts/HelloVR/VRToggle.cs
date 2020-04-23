using System.Collections;
using UnityEngine;
using UnityEngine.VR;

public class VRToggle : MonoBehaviour
{

    void Update() {

        if (Input.GetMouseButtonDown (0)) {
            ToggleVR ();
        }
    }

    void ToggleVR() {

        if (UnityEngine.XR.XRSettings.loadedDeviceName == "cardboard") {
            StartCoroutine(LoadDevice("None"));
        } else {
            StartCoroutine(LoadDevice("cardboard"));
        }
    }

    IEnumerator LoadDevice(string newDevice)
    {
        UnityEngine.XR.XRSettings.LoadDeviceByName(newDevice);
        yield return null;
        UnityEngine.XR.XRSettings.enabled = true;
    }
}
