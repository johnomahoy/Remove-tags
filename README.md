# Remove-tags
An Infusionsoft script that will remove tags base from the "Group Category ID".

Expected data: groupcategory_id  

(1)Get group category id:  

      The script will received a data from a HTTP POST.  

(2)Get Group Name  

      Base from the group category id that's being sent, the script will fetch all the TAG ID  
      that are related to the group category id.  

(3)Delete all the tags related to the group category id.  

      After fetching the id of the tag that's related to the group category id  
      it will loop all the id into an array and delete it by looping it again  
      inside a FOREACH statement.  


Developed by: Benjie
