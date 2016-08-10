<?php
/**
 * @category   Php4u
 * @package    Php4u_BlastLuceneSearch
 * @author     Marcin Szterling <marcin@php4u.co.uk>
 * @copyright  Php4u Marcin Szterling (c) 2011
 * @license http://php4u.co.uk/licence/
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * Any form of ditribution, sell, transfer, reverse engineering forbidden - see licence above
 *
 * Code was obfusacted due to previous licence violations
 */ 
$_F=__FILE__;$_X="JF9GPV9fRklMRV9fOyRfWD0iSkY5R1BWOWZSa2xNUlY5Zk95UmZXRDBpVEhsdmNVUlJiMmRMYVVKQldUSkdNRnBYWkhaamJtdG5TVU5DVVdGSVFUQmtVVEJMU1VOdloxRklRbWhaTW5Sb1dqSlZaMGxEUVdkVlIyaDNUa2hXWmxGdGVHaGpNMUpOWkZkT2JHSnRWbFJhVjBaNVdUSm5Ua05wUVhGSlJVSm9aRmhTYjJJelNXZEpRMEZuU1VVeGFHTnRUbkJpYVVKVVpXNVNiR050ZUhCaWJXTm5VRWN4YUdOdFRuQmlhMEozWVVoQk1HUlROV3BpZVRVeFlYbzBUa05wUVhGSlJVSnFZak5DTldOdGJHNWhTRkZuU1VaQ2IyTkVVakZKUlRGb1kyMU9jR0pwUWxSbGJsSnNZMjE0Y0dKdFkyZExSMDF3U1VSSmQwMVVSVTVEYVVGeFNVVkNjMkZYVG14aWJrNXNTVWRvTUdSSVFUWk1lVGwzWVVoQk1HUlROV3BpZVRVeFlYazVjMkZYVG14aWJVNXNUSGN3UzBsRGIyZFdSV2hHU1VaT1VGSnNVbGhSVmtwR1NVVnNWRWxHUWxOVU1WcEtVa1ZXUlVsRFNrSlZlVUpLVlhsSmMwbEdaRXBXUldoUVZsWlJaMVl3UmxOVmEwWlBWa1pyWjFRd1dXZFJWVFZhU1VWMFNsUnJVWE5KUlZaWlZVWktSbFV4VFdkVU1VbE9RMmxCY1VsRmJFNVZSWGhLVWxWUmMwbEZiRTlSTUhoV1VrVnNUMUo1UWtOV1ZsRm5WR3M1VlVsRmVFcFVWV3hWVWxWUloxWkZPR2RXUldoR1NVWmtRbFZzU2tKVWJGSktVbFpOWjFRd1dXZFVWVlpUVVRCb1FsUnNVa0pSYTJ4TlUxWlNXa3hCTUV0SlEyOW5VbXRzVlZSclZsUlZlVUpIVkRGSloxRlRRbEZSVmtwVlUxVk9WbFJGUmxOSlJrSldWV3hDVUZVd1ZXZFJWVFZGU1VVMVVGUnJiRTlTYkVwS1ZHdGtSbFJWVms5V1F6Um5VMVUwWjFSck9HZFNWbHBHVkd4UloxVXdhRUpVUlhkblZrVm9Sa1JSYjJkTGFVSkNWbFpTU1ZReFNsUkpSVGxUU1VWT1VGVkdiRk5UVldSSlZrTkNTVlF3ZUVWU1ZrcFVTVVZLUmtsRmVFcFJWVXBOVWxOQ1IxUXhTV2RSVlRWYVNVVk9UVkZWYkU1TVEwSkZVVlV4UWxJd1ZsUkpSVGxUU1VVNVZWTkZWbE5FVVc5blMybENUVk5WUmtOVFZYaEtWa1pyYzBsR1pFbFNWbEpKVWxaSloxTlZOR2RSVlRSblVWVk9WVk5WT1U5SlJUbEhTVVZPVUZSc1VsTlJWVTVWVEVOQ1ZWUXhTbFZKUlRsVFNVVTVWVk5GVmxOV01HeFVVbE4zWjFGV1NrcFZNR3hQVW5sQ1IxVnJPVTVNUVRCTFNVTnZaMVF4VmxWSlJUbEhTVVU1VTBsRmJFOUpSVTVRVkdzMVJsRXhVa3BVTURSblZqQnNWVk5EUWxWVFJWVm5WVEE1UjFaR1pFSlZhMVZuVkRGSloxWkZhRVpKUmxaVVVsTkNVRlZwUWxCV1JXaEdWV2xDUlZKVlJrMVRWVFZJVlhsQ1NsUm5NRXRKUTI5blZrVm9Sa2xHVGxCU2JGSllVVlpLUmt4bk1FdEpRMjluVVZjMU5VbEhXblpqYlRCbllqSlpaMXBIYkRCamJXeHBaRmhTY0dJeU5ITkpTRTVzWWtkM2MwbElVbmxaVnpWNldtMVdlVWxIV25aamJVcHdXa2RTYkdKcGQyZGpiVll5V2xoS2VscFRRbXhpYldSd1ltMVdiR050YkhWYWVVSnRZak5LYVdGWFVtdGFWelJuVEZOQ2VscFhWV2RpUjJ4cVdsYzFhbHBUUW1oWmJUa3lXbEV3UzBsRGIwNURhVUZ4U1VWT2RscEhWV2RrTWtaNlNVYzVhVnB1Vm5wWlYwNHdXbGRSWjFwSVZteEpTRkoyU1VoQ2VWcFlXbkJpTTFaNlNVZDRjRmt5Vm5WWk1sVm5aRzFzZG1KSFJqQmhWemwxWTNjd1MwbERiM1pFVVc5S1ExRnJaMWt5ZUdoak0wMW5WVWRvZDA1SVZtWlJiWGhvWXpOU1RXUlhUbXhpYlZaVVdsZEdlVmt5YUdaUmJYaDJXVEowWmxGWFVuUmhWelZ2WkVjeGMxZ3dTbk5aV0U0d1lraFdhbHBYTld4ak1sWm9ZMjFPYjBsSFZqUmtSMVoxV2toTloxUlhSbTVhVmpsQ1drY3hjR0p0YURCaVYzaG1VVzE0ZGxreWRHWldSMVowWTBkNGFHUkhWV2RsZVVKM1pGZEtjMkZYVFdkYWJsWjFXVE5TY0dJeU5HZFlNVGxxWWpJMWVtUklTakZaTTFGdlMxTkNOMGxEVWpCaFIyeDZURlExWmxreU9YVmtTRXAyWWtkNGJHTnBRVGxKUTJSb1drY3hjR0p0YURCaVYzaG1XVzE0YUdNelVuTmtWMDVzWW0xV2VscFhSbmxaTW1kdVQzbEJhMlJIYUhCamVUQXJXREpLYzJJeVRuSlNNMHAyWkZoQloxQlRRVzVaYlhob1l6TlNjMlJYVG14aWJWWjZXbGRHZVZreVoyNVBlVUZyWkVkb2NHTjVNQ3RZTW1oc1dWZFNiR05zVW14bFNGRm5VRk5DVGxsWFpHeFBhbkJ2V2xkNGQxcFlTVzlLTTBKdlkwUlNNVXA1YTNSUWJEbG1TME5rUTJKSFJucGtRMEpVV2xkR2VWa3laMmRVU0ZacVdsYzFiRWxGVW5CWlYyUjFZak5PTUdGWFRucEpTRmw0VEdwTmJrdFVjMmRqUjBaNVdsYzFNRTlxY0daWU1rNTJZbTVPTUdOdVZtcGtRMmR3VDNsQ09VbElRbmxpTTFKc1dUTlNiRnBEUW0xa1Z6VnFaRWRzZG1KcFFtWmtSemxKWkVjeGMwdERhMmRsZVVGcldIcGpNMDlIVFRGUFJFMTRUV3BhYVZsVVRURmFiVkpvV1ZkVk5VOVhTWGRhUjFreVQwZEdhMDFFV1hsSlJEQm5TbnA0YjAxcU5VTmlSMFo2WkVOQ1ZGcFhSbmxaTW1kblZFaFdhbHBYTld4SlJWSndXVmRrZFdJelRqQmhWMDU2U1VaT2FtTnRWbXhpYW5kMllVUkpLMHA2YzJkS1JqZ3pUbnBvYWs1VVozcE5WRWt5V1cxRmVrNVhXbXRaVjBac1QxUnNhVTFIVW0xT2FtaG9Xa1JCTWsxcFFYVlFVMEZ1VUVkbmVsQnJlSEJaTWxaMVl6SlZPRXd5WjNwUWFuaDNVR3Q0Y0ZreVZuVmpNbFZuWVZjMWJXSXpTblJaV0ZKd1lqSTBaMkZZVFdkWldGcG9ZVmQ0YUZsdGVHeEpSemwxU1VjeGRscElWbk5hVTBKNldsaFNNR0ZYTlc1amVVSjZXVE5LYkZwWE5EaE1NMEVyU25welowcEdPV3BPUkdocFRYcG5OVTlIV21sTk1sRTFXbGRSZUZwRVdtbE9NbGt6VGtSTk0wOVhUVE5PVkdjeVQwTkJPVWxGTVdoYU1sVTJUMjFrYkdSR1RuQmliV1J6V2xoU2RtSnBaMjVaYlhob1l6TlNjMlJYVG14aWJWWjZXbGRHZVZreVozWlpiWGhvWXpOU2MyUlhUbXhpYlZaNldsZEdlVmt5WjI1TFV6QXJXakpXTUZadFZubGpNbXgyWW1sbmNFOTVRV3RZZW1NelQwZE5NVTlFVFhoTmFscHBXVlJOTVZwdFVtaFpWMVUxVDFkSmQxcEhXVEpQUjBaclRVUlplVWxETkRsSlEyTTRZVVJOSzFOWE5YcGtSMFp6WWtkR01HRlhPWFZRUXpsdlRYbzBiazk1UVd0WU1sa3pXVlJDYkUxNmEzbGFWRTVxVFVkU2JGbFhVbXBhVkZsNFRsZFNiRTlIUm1oUFZFRXdUVlJDYkVsRU1HZFVWMFp1V2xSdk5sb3lWakJWTW14MVdqSjRiR1JIT1hWTFEyUnFZak5LYkV3elNteGpNamt4WTIxT2JFcDVhM1JRYldSc1pFVk9kbUp0Tld4Wk0xSndZakkwYjBveVRuWmpiVlptWTIxV2FGcERZM0JQZVVGcldESmFhMXBVVG1sYWFtc3dUa2RPYlU1SFdYbGFSRlpzV1ZkTk1VMVhUVEJaYW1zMFdYcEJlazU2VFhwSlJEQm5Ta1k1YlU0eVJYZGFWRTAxVFcxVmVsbDZRbXRhVjBacldUSlZNazFVVm10YVZHaG9XVlJyZDA1RVJYZGFVekFyV20xV01Ga3lhRkJpYlZWdlNXeE9SbFJGVmtSV1EwSm9aRWhTZVdGWFNqRmtSMVptWVZkUloxSnNTbEJVVTBKblNXazFUbGxYWkd4UGFuQnVXbGhTVkdGWE5XNWlSMVl3WWpJMGIwb3lUblpqYlZWMlkyMVdlbUl6Vm5sWk1sVnVTMU13SzFveVZqQldSMFpwWWtkV1QxbFhNV3hMUTJSc1dWaGFabGxZVWpCamJXeHBaRmhTYkVwNWEzVkpiVUZuVmpCb1JsVnJWV2RaUjBZd1pFaEtjRmx1VmpCYVZqbHFZakpTYkZsRFFrMVRWWFJHU1VOa2MyUlhUbXhpYlZabVlWYzFhMXBZYUd4YVEyTTNTV2xyTjBsSGJHMUpRMmRyV0RKYWExcFVUbWxhYW1zd1RrZE9iVTVIV1hsYVJGWnNXVmROTVUxWFRUQlphbXMwV1hwQmVrNTZUWHBKUkhkblRWTkNPR1pEUW14aVdFSXdaVk5uYTFneVdtdGFWRTVwV21wck1FNUhUbTFPUjFsNVdrUldiRmxYVFRGTlYwMHdXV3ByTkZsNlFYcE9lazE2UzFOQmNFbEljMmRLUmpnelRucG9hazVVWjNwTlZFa3lXVzFGZWs1WFdtdFpWMFpzVDFSc2FVMUhVbTFPYW1ob1drUkJNazFwUVhWUVUwRnVVRWhPTUdOdE9YVmFlalZSVldzNVExUkZWazVKU0dSd1pFZG5aMkZYTlhwa1IwWnpZa2RHTUdGWE9YVkpWSGQyWXpOU2VXSXlOVzVRYW5ocFkyazRLMUJIYXl0VVYyeHVZMjFHTUdGWE9YVkpTRTVxWTIxc2QyUklUV2RrTWxaNVdsTkNkV0l6VVdkamJsWjFTVWRLTlVsRk1XaGFNbFoxWkVjNGMwbEhhR2hqU0VKc1ltNU5aMlF5YkRCaFEwSnNaVWhTYkdKdVRuQmtiVlp6WlZOQ2FsbFhUbTloVnpWdVRHbENSR0l5TlRCWlYwNHdTVWhPTVdOSVFuWmpibEU0VERKckswcDZjMmRtVTBKc1lraE9iRWxJYzJkS1JqZ3pUbnBvYWs1VVozcE5WRWt5V1cxRmVrNVhXbXRaVjBac1QxUnNhVTFIVW0xT2FtaG9Xa1JCTWsxcFFYVlFVMEZ1VUVoQksxSlZSbGRKUjNoMllqSjBla2xIT1hKSlF6Qm5XVmhTTUdOdGJHbGtXRkpzU1VoQ2VWcFlUbXhpYmxFNFRETkJLMHA2YzJkbVUwRnJXSHBDYlZwWFVUUlBSR3Q1VGxSRk1FMUhXWGRaTWxrMVdrZFpNRTFFWXpOTmJVMTVUWHBTYWxreVVtMUpSREJuU2tZNWJVNHlSWGRhVkUwMVRXMVZlbGw2UW10YVYwWnJXVEpWTWsxVVZtdGFWR2hvV1ZScmQwNUVSWGRhVXpBcldtMVdNRmt5YUZCaWJWVnZTV3hPUmxSRlZrUldRMEl5V2xoS2VtRlhPWFZKUlZwVFZEQXdaMWxEU1hWVVYwWnVXbFJ2TmxveVZqQlZNbXgxV2pKNGJHUkhPWFZMUTJScVlqTktiRXd6U214ak1qa3hZMjFPYkVwNWEzUlFiV1JzWkVaU2FGbHRlR3hVYlVaMFdsTm5ibGt5T1hsYVZqbDVXbGhPZG1SWVNtcGFVMk53VEdsS1owbEdaRWxTVmtwR1NVZENhbUl5VW14WlEwSk5VMVYwUmtsRFpHbGlSMFo2WkVkNE1Wa3lWblZhV0U1c1dWaEthbUZHT1hwYVdGSXhZME5qTjBscGF6ZEpRMUptVG5wak5GbDZWVFJOZWtWNVRtMUthRTE2Vm0xYVIwWm9XbFJyTlZscVFtdGFhbGswV1ZkUmQwNXFTV2RNYWpCblNXcDRkMUJyTVhaYVNGWnpXbE5DTWxwWVNucGhWemwxU1Vkc2RVbEhVbWhrUjBacFdWaE9iRWxEYUdwaU0wcHNXRE5LYkdNeU9URmpiVTVzUzFOQmExaDZRbTFhVjFFMFQwUnJlVTVVUlRCTlIxbDNXVEpaTlZwSFdUQk5SR016VFcxTmVVMTZVbXBaTWxKdFRFTkNkR0l5VWpGaVIxVm5TMGRPZG1KdFduQmFlVFUwWWxkM2NFbERVbVpaZWxFMFdXcE5ORTlVYUcxWmFrNXJUMWRXYTAxWFVUSlphbVJ0VG5wUmVrNTZiR3BPZWxVMFRtcG5aMHhUUWxCVGVuZDJZMFEwYVU5NVFuQmFhVUZ2U2tZNGQxcHRWbXRQUkdjMVRXcFZlRTVFUW0xTlIwNXRUMWRTYlU1RVFUTk9la3BxVFdwTk1Ga3lUbXRhYVVVNVNrWTVhazVFYUdsTmVtYzFUMGRhYVUweVVUVmFWMUY0V2tSYWFVNHlXVE5PUkUwelQxZE5NMDVVWnpKUFEydG5aWGxCYTFoNll6TlBSMDB4VDBSTmVFMXFXbWxaVkUweFdtMVNhRmxYVlRWUFYwbDNXa2RaTWs5SFJtdE5SRmw1U1VNME9VbERZemhqTTFKNVlqSTFibEJzUWxOVU1FcE5VbFV3WjJReWJEQmhRMEp3WW01T01GbFhlSE5aV0ZKd1lqSTBhRkJET1hwa1NFcDJZbTFqSzFCSFNubE1lalE0WVZRMVNtSnBRbXRaV0ZKb1dXMUdlbHBUUWpCaFIxWjVXbE5DY0dONVFtdGhWMXB0V2xoS2JHSnVVV2RrYlZaNVl6SnNkbUpwUW5aYWFVSXdZVWRWWjJKWE9XdGtWM2hzU1VoU2IxbFhOR2RoVnpSbldtMXNjMXBUTkdkVlNFcDJXVzE0YkdKVFFqTmhXRkp2U1VkT2FGa3lhR3hRZW5kMllWUTBiazk1UWpsSlExSm1UbnBqTkZsNlZUUk5la1Y1VG0xS2FFMTZWbTFhUjBab1dsUnJOVmxxUW10YWFsazBXVmRSZDA1cVNXZE1hakJuU25wNGIwMTZOVkZoU0VGblNtbENWRnBZU2pKYVdFazRUREpuZWxCcFl6ZEpRMUptVG5wak5GbDZWVFJOZWtWNVRtMUthRTE2Vm0xYVIwWm9XbFJyTlZscVFtdGFhbGswV1ZkUmQwNXFTV2RNYWpCblNucDRkMUJzUW05alEwSXlXbGhLZW1GWE9YVlBhVUZ1VEc1Q2IyTklXbXhqYms1d1lqSTBiMHRUTkc1UVF6bDNVR2xqTjBsRFVtWk9lbU0wV1hwVk5FMTZSWGxPYlVwb1RYcFdiVnBIUm1oYVZHczFXV3BDYTFwcVdUUlpWMUYzVG1wSloweHFNR2RLZW5oM1VHeE9iR051V214amFVSjZZakphTUdReVJubGFWRzluU25rMGExZ3hUa1pWYkZwR1ZXeHpibFV3VmxOV2ExWlRXREZPVUZKc1VsaFJWa3BHU2pFd2RVcDZkM1pqUkRSdVQzbEJhMWg2WXpOUFIwMHhUMFJOZUUxcVdtbFpWRTB4V20xU2FGbFhWVFZQVjBsM1drZFpNazlIUm10TlJGbDVTVU0wT1VsRFl6aGpSRFZSVTBaQloxUkhPVzVKUjFaNVkyMDVlV042T0RaSlEyTjFTMGRzZFdGV09XNWFXRkZ2U2pKNGRsb3hPV3hqYmtwMlkyNU5ia3RVT0c1WFYxWjZTbnB2YmxSdE9HNUxVelJ1VUVNNWQxQnBZemRKUTFKbVRucGpORmw2VlRSTmVrVjVUbTFLYUUxNlZtMWFSMFpvV2xSck5WbHFRbXRhYWxrMFdWZFJkMDVxU1dkTWFqQm5TbnA0ZDFCc1FrbFZRMEpHWTI1S2RtTnBRbk5pTW1NMlNVTmpkV0ZYTlhCWU1tUnNaRU5uYmxwWVNubGlNMHBtWWtjNWJrcDVhM1ZLZW5kMlkwUTBiazk1UVd0WWVtTXpUMGROTVU5RVRYaE5hbHBwV1ZSTk1WcHRVbWhaVjFVMVQxZEpkMXBIV1RKUFIwWnJUVVJaZVVsRE5EbEpRMk00WTBRMVVWTkdRV2RhV0doc1dUTldNR0ZYT1hWSlNGSndZbGRWWjJKSGJIUmhXRkUyU1VOamRVdEhiSFZoVmpsdVdsaFJiMG95TVdobFJqbHNaVWRXYW1SWVVuQmlNalZtWkVkc2RGcFRZM0JNZWtWM1RVTnJkVW96VFRoTU0wRXJTbnB6WjBwR09ETk9lbWhxVGxSbmVrMVVTVEpaYlVWNlRsZGFhMWxYUm14UFZHeHBUVWRTYlU1cWFHaGFSRUV5VFdsQmRWQlRRVzVRU0VFclVFZHJLMVpIYUhCamVVSnFXVmMwWjJGSFJqSmFVMEp3WWxoQ2FGa3pVV2RpTWpSbllraFdhbHBYTld4SlIyeDFXa2RXTkVsSFpHeGliVlo1V1ZoU2NHSXlOR2RrUjJ4MFdsTjNaMkZYTldwamJWWm9ZekpWWjJGWFdXZGxWemt4U1Vkb2FHUnRWV2RaVTBKellqTlJaMkl5V1dkVk1IUldZM3AzZG1GVU5EaE1NMEVyU25welowcEdPRE5PZW1ocVRsUm5lazFVU1RKWmJVVjZUbGRhYTFsWFJteFBWR3hwVFVkU2JVNXFhR2hhUkVFeVRXbEJkVkJUUVc1UVNFRXJWRmRXZEdJelNqVkpSM2h3WWxkc01FOXBRVzVNYld4MVlWWTVibHBZVVc5S01qRnNZbGM1ZVdWV09YTmhWekZ3WkVOamNFeHBZemhNTTBFclNucHpaMHBHT0ROT2VtaHFUbFJuZWsxVVNUSlpiVVY2VGxkYWExbFhSbXhQVkd4cFRVZFNiVTVxYUdoYVJFRXlUV2xCZFZCVFFXNVFTRUVyVUVkcksxTlhOVzFpZW05blZGZFdkR0l6U2pWSlIyeDZTVWhLYkdOWVZuQmpiVlpyU1VoU2RrbEhaR3hpYlZaNVdWaFNiRWxIYkhWYVIxWTBURU5DZG1OSVVuQmlWMncyV2xOQ2NHUkRRbWhpYlZGbll6SldhR050VG05SlNFNTJTVWN4YUdFeVZXZGpNMVo1V2xOQ01HRkhSakJKU0d4MlpGTkNiMWxZV214SlIxWjFZak5XYm1GRWQzWmhWRFE0VEROQkswcDZjMmRLUmpnelRucG9hazVVWjNwTlZFa3lXVzFGZWs1WFdtdFpWMFpzVDFSc2FVMUhVbTFPYW1ob1drUkJNazFwUVhWUVUwRnVVRWRuZWxCck1XaGFNbFoxWkVjNFoxSXlWblZhV0Vwb1lrUjNkbUZFVFN0S2VuTm5Ta1k0TTA1NmFHcE9WR2Q2VFZSSk1sbHRSWHBPVjFwcldWZEdiRTlVYkdsTlIxSnRUbXBvYUZwRVFUSk5hVUYxVUZOQmJsQklRU3RUV0UxbllsYzVhMlJYZUd4SlIxWjFXVmRLYzFwWFVTOUpRMk4xU1VOb1RsbFhaR3hQYW5CdVdsaFNWR1JIT1hsYVZVNTJZbTFhY0ZwNVoyNWpSMmgzVGtoVmRtTkhhSGRPU0ZabVdqTktkbVJZUVhaalIyaDNUa2hXWm1KSVZtcGFWelZzV0RKV2RWbFhTbk5hVjFGdVMxTkJMMGxEWkZCVGVtOW5WMWRXZWtwNmIyNVNXRXA1WWpOSk5rbEZOWFpLZVd0blRHbEJibEJET1hkUWFXTTNTVWRzYlVsRGFFNVpWMlJzVDJwd2JscFlVbFJrUnpsNVdsVk9kbUp0V25CYWVXZHVZMGRvZDA1SVZYWmpSMmgzVGtoV1psb3pTblprV0VGMlkwZG9kMDVJVm1aaVNGWnFXbGMxYkZneVZuVlpWMHB6V2xkUmJrdFRRVGxRVTBGM1MxTkNOMGxEVW1aT2VtTTBXWHBWTkUxNlJYbE9iVXBvVFhwV2JWcEhSbWhhVkdzMVdXcENhMXBxV1RSWlYxRjNUbXBKWjB4cU1HZEphbmgzVUdwNGNGQnRaSFpKU0ZKMlNVWk9OV016VW14aVUwRjBVR2xDUkdJeU5XMWhWMlF4WTIxR01HRlhPWFZKUXpBclNVWkNiMk5FVWpGSlJWWTBaRWRXZFdNeWJIWmliazFuV1ZjMWEwbEhWblZaVjBweldsTkNjR1JFZDNaaFZEUTRURE5CSzBscWMyZG1VMEp3V21sQmIxUlhSbTVhVkc4MldqSldNRlV6VW5aamJWWkVZakkxYldGWFpFZGlSMFp1UzBOa2QyRklRVEJrVXpsM1lVaEJNR1JXT1c1amJUa3hZME01ZDJGSVFUQmtWamx6WkZkT2JHSnRWbVppTWpWelpWYzFiR1I1WTNOVVYwWnVXbFJ2TmxsWVFuZExRMnQwVUcxa2JHUkdUakJpTTBwc1MwTnJjRXRUUWpkSlExSm1UbnBqTkZsNlZUUk5la1Y1VG0xS2FFMTZWbTFhUjBab1dsUnJOVmxxUW10YWFsazBXVmRSZDA1cVNXZE1hakJuU1dwNGQxQnJPWFZpU0d0blltMVdNMGxJUW5saU1sSXhXVE5TZWtsSVpIQmlSM2RuV1cxVloyRlhOV3RhV0doc1drUjNkbU5FTkdsUGVVRnJXSHBqTTA5SFRURlBSRTE0VFdwYWFWbFVUVEZhYlZKb1dWZFZOVTlYU1hkYVIxa3lUMGRHYTAxRVdYbEpRelE1U1VOSk9HTkVOVU5hVjNoMlpIbENjR0pwUW5CaWJWSnNaVU5DZWxwWFRqQmhWemwxU1VkT2IxcFhUbkpKUjJoMlpIbENkRmxYTlRWSlNFSjVZakpTTVZrelVucEpTRXBzWTFoV2NHTnRWV2RoVnpWcldsaG9jR0p0WXpoTU0wRXJTV3B6WjJaVFFteGlTRTVzU1VoelowcEdPRE5PZW1ocVRsUm5lazFVU1RKWmJVVjZUbGRhYTFsWFJteFBWR3hwVFVkU2JVNXFhR2hhUkVFeVRXbEJkVkJUUVdsUVNFRXJVVmQ0YzBsSVFubGlNbEl4V1ROU2VrbElaSEJpUjNkbldXMVZaMkZYTld0YVdHaHNXa04zWjJWWE9URkpSMDVvWW1sQ2NHSnRVbXhsUTBKMlltMTROVWxITld4a2VVSjNZMjA1YTJSWFRqQmplVUp3V21sQ2VWcFlSakZoV0Vwc1drUjNkbU5FTkdsUGVVRnJXSHBqTTA5SFRURlBSRTE0VFdwYWFWbFVUVEZhYlZKb1dWZFZOVTlYU1hkYVIxa3lUMGRHYTAxRVdYbEpRelE1U1VOSk9HTkVORGhoVkRWdVlubENNR0o1UWxSbFdFNHdXbGN3WjB4VU5HZFJNamwxV20xc2JtUllTbWhrUjJ4MlltbEJkRkJwUWxGaFNFRXdaRk5DUm1WSVVteGliazV3WWpJMWVrbEhSblZhUTBKc1ltMUdhV0pIVldkaFdGRTRUREpySzFCRE9YZFFhVWszU1Vnd1owcEdPRE5PZW1ocVRsUm5lazFVU1RKWmJVVjZUbGRhYTFsWFJteFBWR3hwVFVkU2JVNXFhR2hhUkVFeVRXbEJkVkJUUVc1UVIyZDZVR3Q0ZGxvelRUaE1NbWQ2VUdsak4wbERVbVpPYlZadFRXcEdhMXBYVW1oTk1rMHhUVmRTYUZscVRtMU5WRlpxV20xS2JVNTZSWHBhVkd4b1RWUlZaMUJUUWs1WlYyUnNUMnB3YmxwWVVrTlpXRTVzVWtkc2VVdERaREpaV0VsdVMxTTFSVlY1Tkc1aVJ6bHVTbnB6WjBwR09IZFplazV0VDBkRk5WcFVVWGhQVkZKdFdsUkZNMXBxWkd0T1JFMTZUVVJOZDFwdFZtdE9WR013VFZOQk9VbEZNV2hhTWxVMlQyMWtiR1JGU21oak1sWkZZVmhKYjBveldtaGphV053VEd0U1ZFeHBaSEJpYlZKc1pVZFdlVXA2YzJkS1JqbHRUV3BGZWxwRVdUSk5hbWMwVFcxU2JWcFVXVFJPUkdocVRsUkNhbGxxYUdwWmJVMTNUMGROTlZwcFFUbEpRMUptVG0xV2JVMXFSbXRhVjFKb1RUSk5NVTFYVW1oWmFrNXRUVlJXYWxwdFNtMU9la1Y2V2xSc2FFMVVWV2RNYVVKRlZYbEJkVW95U25OWldFNHdZa2hXYWxwWE5XeGpNbFpvWTIxT2IweHRlSFphZVdNM1NVTlNaazU2WXpSWmVsVTBUWHBGZVU1dFNtaE5lbFp0V2tkR2FGcFVhelZaYWtKcldtcFpORmxYVVhkT2FrbG5UR293WjBwNmVIZFFhMng2U1VkNGRsb3laSEJpYldObldsYzFhRmx0ZUd4YVEwSndZbWxDZEZsWFpHeGlibEoyVUhsQmJreHBRVzlVVjBadVdsUnZObG95VmpCVk0xSjJZMjFXUkdJeU5XMWhWMk52U2pKU2JHUnBPWE5pTW1OMldWZE9NR0ZZV214S2VXdG5VSGxCYmxRd2N6WkpSbXhzWTNsak5rb3dWbmxqYlRsNVQybENUMko1WTNCSlF6Um5TbnAzZG1ORU5HNVBlVUp3V21sQmIxUlhSbTVhVkc4MldqSldNRlV6VW5aamJWWkVZakkxYldGWFkyOUtNbEpzWkdrNWMySXlZM1paVjA0d1lWaGFiRXA1YTJkUVZEQm5UVU5yWjJWNVFXdFllbU16VDBkTk1VOUVUWGhOYWxwcFdWUk5NVnB0VW1oWlYxVTFUMWRKZDFwSFdUSlBSMFpyVFVSWmVVbERORGxKUTBrNFkwUTFSbU51U25aamFtOW5VRWRySzJWNVVtWmFha2w0VFRKUk1rNXFTVFJQUkVwcldtMVZNazlFVVRSWmVsVjNXVEpKTkZreVNtcE5SR2hxVDFkYU9VbEhXbkJpUjFWblpESnNjMkpEUWs5VU1WRm5XVzFWWjJOSVNuWmFTRlpxV2xkUmMwbEhaSFpKU0ZKMlNVWk9OV016VW14aVUwRjBVR2xDUkdJeU5XMWhWMlF4WTIxR01HRlhPWFZKUXpBclNVVlNiR1J0Vm5OaU0wSjBXbGMxTUVsSFJuVmFRMEpzWW0xR2FXSkhWV2RpUnpsdVNVZGFjR0pIVm5wUVF6bHdVR3AzZG1ORU5HbFBlVUk1U1VkV2MyTXlWV2RsZVVGcldIcGpNMDlIVFRGUFJFMTRUV3BhYVZsVVRURmFiVkpvV1ZkVk5VOVhTWGRhUjFreVQwZEdhMDFFV1hsSlF6UTVTVU5KT0dORU5WQlRlbTluWWtjNWJrbEhXbkJpUjFWbllWaE5aMkpIT1dwWldGSnNXa05DYjFwWVNteEpSRzluVUVoT01HTnRPWFZhZWpVM1NrWTViVTFxUlhwYVJGa3lUV3BuTkUxdFVtMWFWRmswVGtSb2FrNVVRbXBaYW1ocVdXMU5kMDlIVFRWYWJqQTRURE5PTUdOdE9YVmFlalE0VEROQkswbHFjMmRtVTBGcldIcGpNMDlIVFRGUFJFMTRUV3BhYVZsVVRURmFiVkpvV1ZkVk5VOVhTWGRhUjFreVQwZEdhMDFFV1hsSlF6UTVTVU5KT0dORU5HbE1hV2h3WXpFNWJXRlhlR3hMUTFKbVdtcEplRTB5VVRKT2FrazBUMFJLYTFwdFZUSlBSRkUwV1hwVmQxa3lTVFJaTWtwcVRVUm9hazlYV1hCSlJEaG5TakE1VEU5cFFrZGhWM2hzU1VkV05HRllUakJqZVdNMlNqQldlV050T1hsUGFVSkhZVmQ0YkVsSE5YWmtRMEpzWlVkc2VtUklUVzVMVXpScFVFTTVkMUJwU1RkSlExSm1UbnBqTkZsNlZUUk5la1Y1VG0xS2FFMTZWbTFhUjBab1dsUnJOVmxxUW10YWFsazBXVmRSZDA1cVNXZE1hakJuU1dwNGQxQnBTWFZMUjJ4NldETmtlV0ZZVW1oWmJYaHNTME5TWmxwcVNYaE5NbEV5VG1wSk5FOUVTbXRhYlZVeVQwUlJORmw2VlhkWk1razBXVEpLYWsxRWFHcFBWMWx3U1VRNFowb3dPVXhQYVVKSFlWZDRiRWxIYkhwSlNHUjVZVmhTYUZsdGVHeEpRMk0yU1d0V2VXTnRPWGxQYVVKSFlWZDRiRWxIYkhwSlJ6VjJaRU5DTTJOdGJEQlpWMHB6V2xNMFoxRXlhR3haTW5OblkwZFdlV0pYYkhwak1teDJZbTVOWjJSSE9HZFFTRTR3WTIwNWRWcDZOVGRLUmpneVdsZFplVTFYVW14YVIwVjZXWHBWZUZwSFJtbE5NbGw0VGxkT2JWbHRXVE5OVkU1c1QxZEZlRTVZTURoTU0wNHdZMjA1ZFZwNk5HZGFiVGx6V2tkV2VVbHBhM1ZKYW5kMlkwUTBhVTk1UW5CYWFVRnZZVmhPWmxwdGJITmFVMmRyV0RKWmVVMVVUbXRPYWxsNVQwUm5lVnBIV214T2FtY3dUMGROTVUxSFRtbFBSMDVwV1hwQk5GbDZiRzFMVTJ0blpYbEJhMWg2U214WmVtaG9UVmRaTWsxcWEzbFBSMVpxV2tSak5GcEhWbWxQUkU1cVQwUnJOVTFFUVRCWmVsRTBTVVF3WjJNelVtaGtRMmRyV0RKWmVVMVVUbXRPYWxsNVQwUm5lVnBIV214T2FtY3dUMGROTVUxSFRtbFBSMDVwV1hwQk5GbDZiRzFMVkhOblNrWTRNMDU2YUdwT1ZHZDZUVlJKTWxsdFJYcE9WMXByV1ZkR2JFOVViR2xOUjFKdFRtcG9hRnBFUVRKTmFVRjFVRk5CYVZCSVFTdFVSMFo2WkVOQ2RHSXlVbkJhYld4cVdWaFNjR0l5Tkdka1IyeDBXbFJ2WjFCSVRqQmpiVGwxV25vMGFVeHRVbWhrUjFWdlVrVkdWVkpXT1ZOU2EwMDBUV3BKYzBwR09IbGFWMDAwV1ZSR2JVNXFTVFZOYW1oc1dUSlJNMDlIVW14WmFtZDZXWHBuTlU5VVFYZE9SMDB3VDBaemJtSllVbkJpVjFWdVdGTnJkVWxxZDNaak0xSjVZakkxYmxCcWQzWmpSRFJwVDNsQmExaDZZek5QUjAweFQwUk5lRTFxV21sWlZFMHhXbTFTYUZsWFZUVlBWMGwzV2tkWk1rOUhSbXROUkZsNVNVTTBPVWxEWXpoak0xSTFZa2RWWjJSSWJIZGFWREJwWkVkV05HUkRPV3BqTTAxcFVHbEJaMGxEUVdkSlEwRm5VRU5GZEV4VFFXZEpRMEZuU1VOQloxcEhiREpNYms1cVkyMDVjMkpEUWpkSlEwRm5TVU5CWjBsRFFtOWFWMnh1WVVoUk5rbEVTWGROU0VJMFQzbEJaMGxEUVdkSlEwRm5aREpzYTJSSFp6WkpSR3MxU2xSelowbERRV2RKUTBGblNVYzVNbHBZU20xaVJ6a3pUMmxDYUdSWVVuWlBlVUZuU1VOQlowbERRV2RaYlRsNVdrZFdlVTlwUVhoalNHZG5Zekk1YzJGWFVXZEplbGt5VG1welowbERRV2RKUTBGblNVZEthRmt5ZEc1amJUa3hZbTFSZEZreU9YTmlNMGsyU1VOT2Fsa3lUVGRKUTBGblNVTkJaMGxEUW5kWlYxSnJZVmMxYms5cFFUUmpTR2MzU1VOQlowbERRV2RKUTBJNVNVTkJaMGxEUVdkSlEwRjBURlEwWjBsRFFXZEpRMEZuU1VSM2RtTXpValZpUjFVclNVTmpOMGxEVW1aT2VtTTBXWHBWTkUxNlJYbE9iVXBvVFhwV2JWcEhSbWhhVkdzMVdXcENhMXBxV1RSWlYxRjNUbXBKWjB4cU1HZEphbmgzVUd0NGFHTXpVV2RhVnpVd1kyMXNiR042YnpoWmJrbDJVR3A0YTJGWVdXZFpNbmhvWXpOTk9WaERTbnBaTTBwMllrZDRZMGxxTkdsTWFVSndZbGhDYzJJeVVteExRMGs0V1c1SmRsQnBTWE5LU0ZKdllWaE5kRkJ1U214WlYxSm1XbTFzYzFwVFoydFlNbGw1VFZST2EwNXFXWGxQUkdkNVdrZGFiRTVxWnpCUFIwMHhUVWRPYVU5SFRtbFpla0UwV1hwc2JVeERRWGhOUkVGd1MxTTBhVkJET1d0aFdGa3JVRU01ZDFCcFNUZEpTREJuU2tZNE0wNTZhR3BPVkdkNlRWUkpNbGx0UlhwT1YxcHJXVmRHYkU5VWJHbE5SMUp0VG1wb2FGcEVRVEpOYVVGMVVGTkJibEJIWjNwUWEzZ3hXVEpXZFZwVFFrcGliVkpzWlVkV2VsQkRPVzlOZWpSdVQzbENjRnBwUVc5UlNFSjVXbGRrWm1KWFJqQlpNbWR2U25rNVkyTkZkM1prVTJOelNVTmthRXA1YTJkSlZEQm5UVk5yWjJWNVFXdFllbU16VDBkTk1VOUVUWGhOYWxwcFdWUk5NVnB0VW1oWlYxVTFUMWRKZDFwSFdUSlBSMFpyVFVSWmVVbERORGxKUTJNNFkwUTFSbU51U25aamFtOW5WbGhTYlU5Rk5URmlVMEpvWW0xR2MyVlljR3hqYVVKMVdsZFdhMk41UWxGUk1VcEdTVWhXZFdGWFRuWmFSMVZuWXpOV2QyTkhPWGxrUTBJd1lubENhVnBUUW14aWJVWnBZa2RXYTB4cWQzWmpSRFJ1VDNsQ09VbEhWbk5qTWxWblpYbEJhMWg2WXpOUFIwMHhUMFJOZUUxcVdtbFpWRTB4V20xU2FGbFhWVFZQVjBsM1drZFpNazlIUm10TlJGbDVTVU0wT1VsRFl6aGpSRFZRVTNrMFoxVkZUbE5TVTBJeFltMXNhbUl5VW14SlIxSnNaRWRXYW1SSFZtdE1hbmQyWTBRMGJrOTVRamxKUjJ4dFNVTm5hRnB1Vm5WWk0xSndZakkxWmxwWWFIQmpNMUo2UzBOa2RGbHNPWHBrU0VweldsYzBia3RUYTJkbGVVRnJXSHBqTTA5SFRURlBSRTE0VFdwYWFWbFVUVEZhYlZKb1dWZFZOVTlYU1hkYVIxa3lUMGRHYTAxRVdYbEpRelE1U1VOak9HTkVOVVpqYmtwMlkycHZaMVpZVW0xUFJUVXhZbE5DYUdKdFJuTmxXSEJzWTJsQ2RWcFhWbXRqZVVKMFdXdzVlbVJJU25CaWJXTm5XbGhvTUZwWE5YcGhWemwxVEdsQ1JHRkhWbXBoZVVFNFdWTkNiMk50Vm0xUVUwcHZaRWhTZDA5cE9IWmtNMlF6VEc1Q2IyTkROWFZhV0ZGMllsZEdkV1JYUm5OTU1sWjFUREl4YVdNelVubGhWelZ1VEcxc2RXTXpVbWhpUjNob1pFZHNkbUpwTlhkaFNFRnBVR3N4YUdKdVZtaGlRMEozV1Zka2JGQkRPV2hRYW5kMlkwUTBiazk1UWpsSlIxWnpZekpWWjJWNVFXdFllbU16VDBkTk1VOUVUWGhOYWxwcFdWUk5NVnB0VW1oWlYxVTFUMWRKZDFwSFdUSlBSMFpyVFVSWmVVbERORGxKUTJNNFkwUTFVRk41TkdkaVYwcG1Zek5TZVdGWE5XNUpSMUpzWkVkV2FtUkhWbXRNYW5kMlkwUTBiazk1UWpsSlExSm1UbnBqTkZsNlZUUk5la1Y1VG0xS2FFMTZWbTFhUjBab1dsUnJOVmxxUW10YWFsazBXVmRSZDA1cVNXZE1hakJuU1dwNGQxQnJNV2hoVnpSbllWYzFhMXBZYUd4amFVSnRZako0YTFwWVNXZFFTRTR3WTIwNWRWcDZOR3RZZWtKcVRUSlpORmxVYkd4T1JFVTFUa2RhYkUxVVpHMU9NbEV3VFhwTmQwMTZRbTFhVjFFeFRucFJlRkJET1hwa1NFcDJZbTFqSzBsRFNYVkxSMng2V0RKU2NHTnBaMnRZZWtKcVRUSlpORmxVYkd4T1JFVTFUa2RhYkUxVVpHMU9NbEV3VFhwTmQwMTZRbTFhVjFFeFRucFJlRXRUUVM5SlEyUlFVM3B2WjFKSGJIbGFWMDR3WWpOS05VbEhWalJoV0U0d1kzbGpOa293Vm5samJUbDVUMmxDUldGWVNteFpNMUoyWTI1cloySnRPVEJKUjFZMFlWaE9NR041WTNCTWFVazRURE5CSzBscWMyZGhWMWxuUzBOR2NHTXhPV3RoV0VsdlNrWTRkMWw2VG0xUFIwVTFXbFJSZUU5VVVtMWFWRVV6V21wa2EwNUVUWHBOUkUxM1dtMVdhMDVVWXpCTlUydHdTVWh6WjBwR09ETk9lbWhxVGxSbmVrMVVTVEpaYlVWNlRsZGFhMWxYUm14UFZHeHBUVWRTYlU1cWFHaGFSRUV5VFdsQmRWQlRRV2xRU0VFclVFZHJLMUV5YUd4Wk1uTm5TV2sxVGxsWFpHeFBhbkJ1V2xoU1ExbFlUbXhTUjJ4NVMwTmtNbGxZU1c1TFV6UnBTVWRhZG1KSFVteGphVUozV2xoS2RHRllUbnBoVnpsMVkzbENhR0p0VVdka1IyaHNZbWxDVTFwWFdubGFXRTV2U1VaT2JGbFlTbXBoUTBKTlpGZE9iR0p0VldkaFZ6VnJXbGhuWjB0R1RqVmpNMUpzWWxOQmRGQnBRa1JaVjA1dldsTkNUbGxYTldoYU1sWjBXbGMxTUV0VFFUaE1NbXNyVUVNNWQxQnBTVGRKU0RCbldsZDRlbHBUUWpkSlExSm1UbnBqTkZsNlZUUk5la1Y1VG0xS2FFMTZWbTFhUjBab1dsUnJOVmxxUW10YWFsazBXVmRSZDA1cVNXZE1hakJuU1dwNGFXTnBPQ3RRUjJjd1VHdFNjR050Vm1wa1J6bDVZVmRXZWtsSVFubGFXRTVzWW01UlowdEZUbTlhVjA1eVNVYzFNV0pYU214amFVSjJXbWxDZDJOdE9XdGtWMDR3WTNsQ2NHSnBRazFrVjA1c1ltMVZaMkZYTld0YVdHZG5XbTA1YzFwSFZubEpSMHBzWWtjNU0wdFViemhNTW1jd1VHcDRhV05wT0N0SmFuTm5XbTA1ZVZwWFJtcGhRMEZ2WW0xV00wbEZVbkJqYlZacVpFYzVlV1ZWYkRCYVdFcG9aRWM1ZVV0RFVtWk5SMDE2V21wb2FFOVhWVEJOVkdzd1dtMVZlRTR5V1ROYVJGRjZUWHBCZWsxSFdteGFSRlV6VGtSRmNFbEhSbnBKUTFKbVQxUkNhazVxWTNoT2VsVTBUbnBPYWxsNlJteGFWRlUwVGtSQmVWa3lSbWhPVkVwcVdWUlJlazFxVFhCSlNITm5ZVmRaYjBwR09EVk5SMDB5VG5wRk0wNVVaek5OTWs1cVRWZFdiRTVVWnpCTlJFcHFXVmRGTVUxdFRtaE9SRTE1VFhrd0syRllUa1ZpTTFGdlMxTnJaMWt5T1hWa1IyeDFaRmRWTjBsSGJHMUpRMmRyV0hwcmQxbDZXVE5OVkdNeFQwUmplbGt5VFhoYVYxVXhUMFJSZDAxdFRtaFpWRlY1V1RKRk1FMTZTWHBNVkRWd1l6QlNjR05wWjNCTFUwSTNTVWhTZVdWVFFqZEpRMUptV1hwU2JVOUhXVFZPUkZrMFRsZEplRmxYUlRKTmVsRTBUVVJzYkUxRVpHMVplbHBzV1hwb2JFOUhSV2RRVTBKT1dWZGtiRTlxY0doalNFRnZTMU13SzFveVZqQlZNMUoyWTIxVmIwcEdPRFZOUjAweVRucEZNMDVVWnpOTk1rNXFUVmRXYkU1VVp6Qk5SRXBxV1ZkRk1VMXRUbWhPUkUxNVRYa3dLMW95VmpCU2JXeHpXbGMxYUdKWFZXOUxVMnMzU1VOU1prMHlSWHBOUkZsNFRtcEZlazFIVm10TlJGVjNUbXBGTVZwcVNURmFWRnBzVFZSWmVsbHFUVFJhUkVGblVGTkNZVnBYTld0WU1VNXNXVmhLYW1GR09VMWtWMDVzWW0xVk5rOXRPWGRhVnpSdlNrWTROVTFIVFRKT2VrVXpUbFJuTTAweVRtcE5WMVpzVGxSbk1FMUVTbXBaVjBVeFRXMU9hRTVFVFhsTmVUQXJXakpXTUZWSFJqQmhSelZvWWxkVmIwdFRhemRKUTFKbVdsUkpkMDVxVFRST1JGVXlXbXBvYWs1WFZURk9WRUY1VDBScmQxcEhXbWhOVkZwcFRWZFZlVnBVVVdkUVUwSk9XVmRrYkU5cWNHNWFXRkpPWWpKU2JHSkRaMjVaYlhob1l6TlNjMlJYVG14aWJWWjZXbGRHZVZreVozWlpiWGhvWXpOU2MyUlhUbXhpYlZaNldsZEdlVmt5WjI1TFV6QXJZekpXTUZVelVuWmpiVlpLV2tObmExaDZhM2RaZWxrelRWUmpNVTlFWTNwWk1rMTRXbGRWTVU5RVVYZE5iVTVvV1ZSVmVWa3lSVEJOZWtsNlRGUTFibHBZVWtkaFYzaHNZbTFHZEZwVFozQkxVekFyV1RJNU1XSnVVa3BpYlZKc1pVZFdhMHREYXpkSlExSm1UbnBqTkZsNlZUUk5la1Y1VG0xS2FFMTZWbTFhUjBab1dsUnJOVmxxUW10YWFsazBXVmRSZDA1cVNXZE1hakJuU1dwNGIwMTZOVXBpYlZKc1pVTkNiV0l6U1dkak0xSjJZMjFWTmtsRWVIcGtTRXAyWW0xakswbHBOR3RZTWswd1dtcG9iVTlVVVRKUFJGWnBUVmRHYUU1cVRUQlBSRUUxV2xSQk0xcHRUVEphVjAwMFdsUm9hRXhVTlc1YVdGSlBXVmN4YkV0RGEzVkpRMGs0VEROT01HTnRPWFZhZWpSblMwVnNSVWxFZUhwa1NFcDJZbTFqSzBscE5HdFlNazB3V21wb2JVOVVVVEpQUkZacFRWZEdhRTVxVFRCUFJFRTFXbFJCTTFwdFRUSmFWMDAwV2xSb2FFeFVOVzVhV0ZKS1drTm5jRXhwU1RoTU0wNHdZMjA1ZFZwNk5IQlFRemx2VFhvMGFVOTVRV3RZZW1NelQwZE5NVTlFVFhoTmFscHBXVlJOTVZwdFVtaFpWMVUxVDFkSmQxcEhXVEpQUjBaclRVUlplVWxETkRsSlEwcEZZakpPTVdKWFZuVmtTRTFuWWxkR2VXRXlWbXRKUjBaNlNVaENlV0l5VG14ak0wNXNXa05DY0dKcFFuUmxWazVTVkVOQ2ExbFlVbWhaYlVaNldsUnZaMUJJVGpCamJUbDFXbm8wYVV4cFVtWmFWRWwzVG1wTk5FNUVWVEphYW1ocVRsZFZNVTVVUVhsUFJHdDNXa2RhYUUxVVdtbE5WMVY1V2xSUmRVbHFkM1pqTTFKNVlqSTFibEJxZUdsamFUZ3JTV3B6WjJGWFdXZExRMUptV2xSSmQwNXFUVFJPUkZVeVdtcG9hazVYVlRGT1ZFRjVUMFJyZDFwSFdtaE5WRnBwVFZkVmVWcFVVV2RRVkRCblRVTnJaMlY1UVd0WWVtTXpUMGROTVU5RVRYaE5hbHBwV1ZSTk1WcHRVbWhaVjFVMVQxZEpkMXBIV1RKUFIwWnJUVVJaZVVsRE5EbEpRMHBHWTI1S2RtTnFiMmRYVnpreFNVYzFiRnBYVVdka1J6aG5ZMjFXY0dKdFVteGxRMEl3WW5sQ2JscFlVV2RqU0VwMldraFdhbVJEUW5CaWJWSnNaVWRXYTFCSFNubE1lalJwVDNsQ09VbERVbVpPZW1NMFdYcFZORTE2UlhsT2JVcG9UWHBXYlZwSFJtaGFWR3MxV1dwQ2ExcHFXVFJaVjFGM1RtcEpaMHhxTUdkSmEyeHRTVWRHYVdJeldteEpSelV4WWxkS2JHTnBRbkJqZVVKellqTmtiR05wUWpCaFIwWjFTVWMxTVdKWFNteGphVUoyV21sQ2JHSnRSbWxpUjFaclRFTkNjR0pwUW5wa1J6bHFZWGxDYUdKdFVXZGpNbFpvWTIxT2IxbFhTbk5hVTBKM1kyMDVhMlJYVGpCamVVSndZbWxDTldJelZubEpTRTR3WWpOS2JFbElVbTlhVnpSblpWYzVNVWxGTVZaVk1WRm5ZMjFXY0dKdFVteGxSSGhwWTJrNEswbHFjMmRLUmpnelRucG9hazVVWjNwTlZFa3lXVzFGZWs1WFdtdFpWMFpzVDFSc2FVMUhVbTFPYW1ob1drUkJNazFwUVhWUVUwRnBWa2RvY0dONVFuVmtWekZwV2xoSloxa3lSblZKUjBwc1NVZG9jRm95YUd4amFVSXdZVWRHZFVsSE5URmlWMHBzWTJsQ2RscHBRbmRqYlRsclpGZE9NR041UW5CaWFVSndZbTFTYkdWRFFuQmFhVUkxWWpOVloyRkhSakphVTBKcVlqSTFiV0ZYWkRGamJVWnBZa2RWZGxvelNuWmtXRUpzV2tNNWFXUlhOV3RpUjFWblkwaEtkbHBJVm1wa1NFMW5ZVmMwWjJWWE9URmphVUo2WkVjNWVWcFRRak5oUjJ4cVlVTkNhR050VldkaWJUa3dTVWhhY0dNeWJHbGlSMVZuWXpKV2QxbFlTbWhrUjFaelpWTTBPRmx1U1haUWFVazNTVU5TWms1Nll6UlplbFUwVFhwRmVVNXRTbWhOZWxadFdrZEdhRnBVYXpWWmFrSnJXbXBaTkZsWFVYZE9ha2xuVEdvd1owbHFlSE5oVkRWTlpGZE9iR0p0VldkaFZ6VnJXbGhuWjFwdE9YTmFSMVo1VDJsQk9HTXpVbmxpTWpWdVVHbEpkVWxEVW1aUFZFSnFUbXBqZUU1NlZUUk9lazVxV1hwR2JGcFVWVFJPUkVGNVdUSkdhRTVVU21wWlZGRjZUV3BOZEZCdFpHeGtSa0pvWkVkb2RWbFhNV3hMUTJ0blRHbEJhVkJET1hwa1NFcDJZbTFqSzBsR2RFZGlNMHAwV1ZoUloyUnRWbmxqTW14MlltcHZaMUJJVGpCamJUbDFXbm8wYVV4cFVtWk5Na1Y2VFVSWmVFNXFSWHBOUjFaclRVUlZkMDVxUlRGYWFra3hXbFJhYkUxVVdYcFphazAwV2tSQmRGQnRaR3hrUlZwMlkyMHhhR1JHV214amJrNXdZakkwYjB0VE5HbFFRemw2WkVoS2RtSnRZeXRZVkhkMllrZHJLMGxxYzJkS1JqZ3pUbnBvYWs1VVozcE5WRWt5V1cxRmVrNVhXbXRaVjBac1QxUnNhVTFIVW0xT2FtaG9Xa1JCTWsxcFFYVlFVMEZwVUVkNGNGQnNkRTlrVnpGcFdsaEpaMkl5V1dkalNFcDJXa2hXYW1SSVRXZGhWelZyV2xob2JGcERRbkJpYVVKb1dXMDVNbHBUUW0xaU1uaHJXbGhKTmtsRWVIcGtTRXAyWW0xakswbHBOR3RZZWs1b1RYcEJNazFVV1hoTmVrSnNXa1JCTVUxRVdYaE9WMWw1VGxkVk1scFVSVEpOTWtsNlQwZFJkMHhVTlhWa1Z6RkZZakpPZWt0RGEzVkphbmQyWXpOU2VXSXlOVzVRYVVGMFNVaFNiMkZZVFdkak1taDJaRmQ0YTBsSE1XaGtSMDV2U1VjMU1XSlhTbXhqYVVKMldtbENiR0p0Um1saVIxWnJURU5DY0dKcFFucGtSemxxWVhsQ2FHSnRVV2RqTWxab1kyMU9iMWxYU25OYVUwSjNZMjA1YTJSWFRqQmplVUp3WW1sQ05XSXpWbmxKU0U0d1lqTktiRmhVZDNaaVIyc3JTV3B6WjJGWFdXZExRMUptVFRKRmVrMUVXWGhPYWtWNlRVZFdhMDFFVlhkT2FrVXhXbXBKTVZwVVdteE5WRmw2V1dwTk5GcEVRWFJRYlRVeFlsVlNkbGt6VFc5TFUwRTVVRk5CZDB0VFFqZEpRMUptVG5wak5GbDZWVFJOZWtWNVRtMUthRTE2Vm0xYVIwWm9XbFJyTlZscVFtdGFhbGswV1ZkUmQwNXFTV2RNYWpCblNXcDRjMkZVTlVaamJrcDJZMnB2WjFWSE9YcGpNbXhwWWtkVloyTklTblpaYlhoc1lsTkNiMXBZU214SlF6Qm5ZbTA0WjJNeVZtaGpiVTV2V1ZkS2MxcFRRbmRqYlRsclpGZE9NR041UW5CaWFVSXdZVWRzZWtsSVRqQmlNMHBzVUhwM2RtSkhheXRKYW5OblpsTkJhMWg2WXpOUFIwMHhUMFJOZUUxcVdtbFpWRTB4V20xU2FGbFhWVFZQVjBsM1drZFpNazlIUm10TlJGbDVTVU0wT1VsRFNUaFpia2wyVUdsSk4wbElNR2RaTWtZd1dUSm5aMHRGVmpSWk1sWjNaRWRzZG1KcFFXdFlla1pzV1cxS2JVOVVhR3BPYWxac1QxUk5lVmxxU1hkUFZGVXdUWHBKTTFscVl6Sk9hazB3V1dwSmQwdFRRamRKUTFKbVRucGpORmw2VlRSTmVrVjVUbTFLYUUxNlZtMWFSMFpvV2xSck5WbHFRbXRhYWxrMFdWZFJkMDVxU1dkTWFqQm5TV3A0YzJGVU5VWmpia3AyWTJwdlowbHBOR3RZZW10M1dYcFpNMDFVWXpGUFJHTjZXVEpOZUZwWFZURlBSRkYzVFcxT2FGbFVWWGxaTWtVd1RYcEpla3hVTlc1YVdGSlJXVmhTYjJKdFJuUmFVMmR3VEdsSloyRllUV2RpYlRrd1NVaGFhR0pIYkd0SlIzZ3hXVEpXZFZwVFFuQmliVkpzWlVOQ2JXSXpTblJaV0ZFdlNVVXhiR016VG1oYU1sVTJTVU5KZFVwR09IaGFWMHBwV21wck5GbDZXVEZhVkd0NlRXMUplVTFFYXpGT1JFMTVUakpKTTA1cVdYcE9SMGw1VFVNd0sxb3lWakJVVjFaNll6SkdibHBUWjNCTWFVazRUREo0Y0ZCcWVHbGphVGdyU1dweloyWlRRamxKU0RCblNrWTRNMDU2YUdwT1ZHZDZUVlJKTWxsdFJYcE9WMXByV1ZkR2JFOVViR2xOUjFKdFRtcG9hRnBFUVRKTmFVRjFVRk5CYVZCRE9YZFFhVWszU1Vnd1oyTnRWakJrV0VwMVNVTlNaazU2WXpSWmVsVTBUWHBGZVU1dFNtaE5lbFp0V2tkR2FGcFVhelZaYWtKcldtcFpORmxYVVhkT2FrazNTVWd3WjJOSVZtbGlSMnhxU1VkYU1XSnRUakJoVnpsMVNVWTVibHBZVWtaaVIxWjBXbGMxTUZOSVVuUmlRMmR3U1VoeloyTnRWakJrV0VwMVNVTmtNRnBZVGpCUGVXTTNTVWd3WjFwdVZuVlpNMUp3WWpJMFoyTnRWbWhhUmpsdFlWZDRiRXREVW1aYWFrazFXa2RPYVU1NlFtaFBSR3hyV1hwc2EwNHlVbXhPVkZsNldYcFJkMWx0Um10WmFtZDNXVzFWYzBsRFVtWlBSRmt6VFVSU2ExcFVXVEJOYW14clRsUlpORTVIU1hsT1YwcHNUbFJWTWs0eVRYbFpNa1Y2VGtkUmNFbEljMmRLUmpsc1RsZFdiRnBFWXpST1Yxa3dXbXBGZWsxcVozbE5ha2t6VGxkYWFGcFhTbWxaVjA1dFRsUkJNVTFEUVRsSlIxcDJZMGRXZFV0RFVtWmFha2sxV2tkT2FVNTZRbWhQUkd4cldYcHNhMDR5VW14T1ZGbDZXWHBSZDFsdFJtdFphbWQzV1cxVmMwbERTbmxKYVdzM1NVTlNabHBFYXpKTlZHeHFUVlJrYWs1WFVUTk5WR3hyVGpKVk1FNHlVVEZOTWxGM1QwUmpkMDE2VlRGYVJHdG5VRk5CYTFoNlp6Sk9la0V3V2tkVk1rNUVTVFZhUkZVeVQwUlNhVTFxVm1sYVZGVXhUbXBrYWsxdFRtaE5lbEpyVDNsQmExaDZVbWhPZWs1cVdtcEJlVTlVYkdsWmVteHBUbXBvYUZsdFVtbFBSR3hzVG0xTk5VMVhXWGRaYlUwMFNVUXdaMHhVU1RkSlExSm1UMVJrYkUxcVZUSmFSMVY1VDFkVk1FNUVaM2RhVjFKdFRucFdiVTlIVm1oTlJFazFXa1JOZDFreVZXZFFVMEp0V1ZkNGVscFVjMmRLUmpsc1RsZFplazE2Ykd4T1IwWnJUbnBvYlZreVNUUlphbGt6V1hwVk1rMVhUVE5PZW14dFRYcENhRTVUUVRsSlIwWjVZMjFHTlV0RGF6ZEpTR1J2WVZkNGJFbERaMnRZTWxFMVRtcEZOVmw2UlROWmVsWnJUbnBGTlZwRVpHeE9SR1JyVGxST2EwMUVaek5OUkUweFRsZFJOVWxFTkdkTlEydG5aWGxCYTFneVZtcE9iVTEzVFcxTmVGcFVWbXhPUkZacldXcEZORmxVVm10T01rMHlXWHBCTTA5VWFHMU9hbXN6U1VRd1owbHBRV2xQZVVJellVZHNjMXBUUVc5S1JqbHNXWHBhYWsxRVNtcE5WMVV4V2xSUk1WcEhTWGhQUjBVeFdrUmthazV0VFhkT2VtczBXbXBaTlU1NVFXaFFVMEZwV0VjMGFVdFRRamRKUjJ4dFMwZGFlbHBYVm5KTFExSm1XbFJXYkZwWFVUTlBSRlp0VGtkWmVFMTZTVFJOYWtsNVRucFdiVmxYVm1sWmJVWnFXbXBWZDA1VVFYTkpRMUptVGtkRk0wMHlUbTFOUkVrMVQxZEthazlYU1RKUFIwWnBXa2RKTkU5WFZUSlplbXQ0V21wQ2FWbDZaM05KUms1R1VsVjBabEpWTlVWTFUwRTVVRk5CZEUxVGEyZGxlVUZyV0hwck0xcFVTVEZPYlZKc1RXcHNiRTVFVVRSTlIxWnJXbXBqTVZwcWFHeFpWRUY1VDFkUmVrMUhUbXhKUkRCblpFaEtNVnBVYzJkWmJrcHNXVmR6TjBsSU1HZEtSamxzV1hwYWFrMUVTbXBOVjFVeFdsUlJNVnBIU1hoUFIwVXhXa1JrYWs1dFRYZE9lbXMwV21wWk5VNTVRVGxKUjFwdVdsaFNha3REVW1aYVZGWnNXbGRSTTA5RVZtMU9SMWw0VFhwSk5FMXFTWGxPZWxadFdWZFdhVmx0Um1wYWFsVjNUbFJCY0U5NVFXdFllbEpvVG5wT2FscHFRWGxQVkd4cFdYcHNhVTVxYUdoWmJWSnBUMFJzYkU1dFRUVk5WMWwzV1cxTk5FbERNSFJQZVVJNVNVTlNabHBFYXpKTlZHeHFUVlJrYWs1WFVUTk5WR3hyVGpKVk1FNHlVVEZOTWxGM1QwUmpkMDE2VlRGYVJHdG5URk13TjBsSGJHMUpRMmRyV0hwck0xcFVTVEZPYlZKc1RXcHNiRTVFVVRSTlIxWnJXbXBqTVZwcWFHeFpWRUY1VDFkUmVrMUhUbXhMVTBJM1NVaEtiR1F5YkhWYVEyZHJXREpWTVZwWFZtdE9lbWN4V21wU2JVMVVUWGxQUkVsNVRXcGpNVnB0Um14WmJVcG9XVEpaTVUxRVZYZExWSE5uWmxOQmExZ3lWVEZhYWsxNlQxZFZNRmxYVVROUFIxcHFXV3BvYVU1cVpHcE9WRmw0V1hwak0wOVhXWHBOUjBVeFYzbFNaazlFV1ROTlJGSnJXbFJaTUUxcWJHdE9WRmswVGtkSmVVNVhTbXhPVkZVeVRqSk5lVmt5UlhwT1IxRjBTa1k1YTA5VVdYaFBWMDE0VGpKTk1WcEVZM2hQVjFFeldsUlJNMXBFVlhwYVJFRTBUbnBCZWs1VVZtdFBVekI0V0ZOQk9VbEhXbTVhV0ZKNlMwTlNabHBVVm14YVYxRXpUMFJXYlU1SFdYaE5la2swVFdwSmVVNTZWbTFaVjFacFdXMUdhbHBxVlhkT1ZFRndUM2xDY0ZwcFFXOUtSamcxVGpKVmVVNVVXbXRhVkVrMVdsUlJNRTlFUW14YVIxa3pUbGRaTkZwWFJYZE5hbXhyVFhwQ2FscFRhMmRaYmtwc1dWZHpOMGxJTUdkYWJVNXpZak5PYkVsRFoydFlNbFV4V2xkV2EwNTZaekZhYWxKdFRWUk5lVTlFU1hsTmFtTXhXbTFHYkZsdFNtaFpNbGt4VFVSVmQwdFVjMmRqYlZZd1pGaEtkVWxIUm5samJVWTFXRE5LYkdSdFZubGpNbFZ2U2tZNWJFNVhXWHBOZW14c1RrZEdhMDU2YUcxWk1razBXV3BaTTFsNlZUSk5WMDB6VG5wc2JVMTZRbWhPVTJzM1NVZ3daMlpSUFQwaU95UmZSRDF6ZEhKeVpYWW9KMlZrYjJObFpGODBObVZ6WVdJbktUdGxkbUZzS0NSZlJDZ2tYMWdwS1RzPSI7JF9EPXN0cnJldignZWRvY2VkXzQ2ZXNhYicpO2V2YWwoJF9EKCRfWCkpOw==";$_D=strrev('edoced_46esab');eval($_D($_X));