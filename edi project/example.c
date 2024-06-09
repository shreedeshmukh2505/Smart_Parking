using UnityEngine;
using System;
using System.Collections.Generic;
using System.Collections;

public class CollectionsExample : MonoBehaviour
{

  void Start()
  {
    ArrayExample();
    ListExample();
    HashSetExample();
    DictionaryExample();
    MultiCollectionExample();
  }

  void ArrayExample()
  {
    /**
     * An array of strings. This array is fixed length and cannot change.
     */
    string[] itemNames = new string[]{ "item1", "item2", "item3" };

    string item2 = itemNames[1]; // Access any value in the array quickly.
    // This is not possible
    // itemNames.Add("foo");
    // itemNames.AddAt(0, "foo");
    // itemNames.Remove(1);


    // When you need to change the size of the array you have to copy the array
    // and add a new item, then assign it to the initial value.
    string[] tempArray = new string[itemNames.Length + 1];
    for(int i = 0; i < itemNames.Length; i++)
    {
      tempArray[i] = itemNames[i];
    }
    itemNames = tempArray;
    //and add our final value
    itemNames[3] = "item4";

    //Pretty complicated, better to use a List if you need to resize.
  }

  void ListExample()
  {

    List<string> itemNames = new List<string>();
    itemNames.Add("item1");
    itemNames.Add("item2");
    itemNames.Add("item3");
    
    // adding another value is easy later
    itemNames.Add("item4");
    itemNames.Insert(0, "item5"); //add wherever it works for you
    string item2 = itemNames[1]; //access values wherever
  }


  void HashSetExample()
  {
    HashSet<string> inInventory = new HashSet<string>();
    inInventory.Add("item1");
    inInventory.Add("item3");

    // This is not possible
    // string item2 = inInventory[2];

    // hash sets are unordered, meaning this is invalid as well:
    // inInventory.Insert(0, "item5")


    // This returns a boolean: either its in the set or not!
    // Doesn't loop over everything like a list would.
    if(inInventory.Contains("item1"))
    {
      Debug.Log("[CollectionsExample] Item 1 in inventory");
    }
    if(!inInventory.Contains("item2"))
    {
      Debug.Log("[CollectionsExample] Item 2 is not in inventory");
    }

  }

  void DictionaryExample()
  {
    Dictionary<string, string> descriptions = new Dictionary<string, string>();

    descriptions.Add("item2", "Cheap vendor trash.");
    descriptions.Add("item3", "A fancy item for young travellers.");
    descriptions.Add("item1", "The default item."); // Sequence doesn't matter for hash-based structures.

    //Gets a different string for the given string quickly. 
    // Doesn't loop over everything like a list would.
    string description = descriptions["item2"];
    Debug.Log("[CollectionsExample] item 2's description:"+description);
  }

  void MultiCollectionExample()
  {
    // Create a dictionary to quickly look up information.
    Dictionary<string, string> itemDescriptions = new Dictionary<string, string>();
    // A list for looping through all items in an ordered sequence.
    List<string> itemNames = new List<string>();
    for(int i = 0; i < 10; i++)
    {
      string itemName = "item "+i;
      string itemDescription = "A description of item"+i+".";
      itemNames.Add(itemName);
      itemDescriptions.Add(itemName, itemDescription);
    }

    foreach(string itemName in itemNames)
    {
      string description = itemDescriptions[itemName];
      Debug.Log("[CollectionsExample.MultiCollectionExample()] description:"+description);
    }
  }

}