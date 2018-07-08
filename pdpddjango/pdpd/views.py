import json

from django.http import JsonResponse

def dd(inny):
    if type(inny) is dict:
        return inny
    elif hasattr(inny, '__dict__'):
        keys = list(inny.__dict__)
        outty = {}
        for key in keys:
            outty[key] = str(inny.__dict__[key])
        return outty
    else:
        return str(inny)

def flat(request):
    return JsonResponse(dd(request), safe=False)
    