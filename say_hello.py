import sys
# 51. Run Python files
if len(sys.argv) > 1:
    name = sys.argv[1]
    print('Hello ', name.capitalize(), '!')
else:
    print('Hello friend!')