using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class TextNumChange : MonoBehaviour
{
    Text spremeni;
    public GameObject Besedilo;

    void Start()
    {
        spremeni = GetComponent<Text> ();
    }

    void Update()
    {
        
    }

    public void Sprememba(){
        int n = Besedilo.GetComponent<TextChange>().n+1;
        int x = Besedilo.GetComponent<TextChange>().besedilo.Length;
        string stevilo = n+" / "+x;
        spremeni.text = stevilo;
    }
}
