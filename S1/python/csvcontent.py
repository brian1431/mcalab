import csv

def write_dict_to_csv(filename, data_dict):
&quot;&quot;&quot;
Write a Python dictionary to a CSV file.
:param filename: Name of the CSV file
:param data_dict: Python dictionary to be written to CSV
&quot;&quot;&quot;
with open(filename, &#39;w&#39;, newline=&#39;&#39;) as csvfile:
csv_writer = csv.DictWriter(csvfile,
fieldnames=data_dict.keys())
csv_writer.writeheader()
csv_writer.writerow(data_dict)
print(f&#39;Dictionary has been written to {filename}&#39;)

def read_csv_and_display(filename):
&quot;&quot;&quot;
Read a CSV file and display its content.
:param filename: Name of the CSV file
&quot;&quot;&quot;
with open(filename, &#39;r&#39;) as csvfile:
csv_reader = csv.DictReader(csvfile)
for row in csv_reader:
print(row)

# Example usage:

# Writing dictionary to CSV
data_to_write = {&#39;Name&#39;: &#39;John Doe&#39;, &#39;Age&#39;: &#39;25&#39;, &#39;City&#39;: &#39;New
York&#39;}
write_dict_to_csv(&#39;example.csv&#39;, data_to_write)

# Reading and displaying content from CSV
print(&#39;\nReading and displaying content from CSV:&#39;)
read_csv_and_display(&#39;example.csv&#39;)
