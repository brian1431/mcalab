class rectangle:
	def __init__(self,length,width):
		self._length = length
		self._width = width
	def area(self):
		return self._length* self._width
	def __it__(self,other):
		return self .area()< other.area()
rectangle1 = rectangle(5,10)
rectangle2 = rectangle(8,6)
if rectangle1 < rectangle2:
	print("rectangle 1 has smaller area than rectangle 2,")
elif rectangle1 > rectangle2:
	print("rectangle 1 has a larger area than rectangle 2.")
else:
	print("both rectangle have the same area.")



