list1=input("enter the first list:")
list2=input("enter the 2nd list:")
if len(list1)==len(list2):
	print("same length")
else:
	print("not same")
#list1=[int(x) for x in list1.split("")]
#                                                                                                                                                  list2=[int(x) for x in list2.split("")]
sum1=sum(list1)
sum2=sum(list2)


set1=set(list1)
set2=set(list2)
intersection=set1 & set2
if intersection:
	print(" two list have atleast one value is common")
else:
	print("two list have no values in common")
	
