import json

class Zen:
    def beautifulIsBetterThanUgly(self):
        try:
            eval('beautiful = -1 if 133 == 0133 and "133" == "0133" or "133" == "0133" else 0')
        except SyntaxError:
            beautiful = -1

        try:
            ugly = json.loads('{"hello": "world"')
        except json.JSONDecodeError:
            ugly = None

        return beautiful > ugly
