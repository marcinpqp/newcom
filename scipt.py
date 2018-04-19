import csv






with open('miejsca_1.csv', 'r') as file1:
    with open('miejsca_2.csv', 'r') as file2:
        uniques = set(file1).difference(file2)

uniques.discard('\n')

with open('some_output_file.txt', 'w') as file_out:
    for line in uniques:
        file_out.write(line)
