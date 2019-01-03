@extends('atomic::layout')
@section('header')


@endsection
@section('content')

    <div class="container-fluid">
        <div class="row p-t-30">
            <div class="col-sm-12">
                <div class="white-box text-center">
                    <hr>
                    <img width="250px"
                         src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iLTE5IDEgNTExIDUxMS45OTkwNCIgd2lkdGg9IjUxMnB4Ij48bGluZWFyR3JhZGllbnQgaWQ9ImEiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iIzY2MmQ5MSIvPjxzdG9wIG9mZnNldD0iLjQzNyIgc3RvcC1jb2xvcj0iIzM4NzNiMyIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzAwYzlkZCIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJiIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEuMDAyMDYxIDAgMCAtMS4wMDIwNjEgLTE4LjM5ODkyNCA1MDQuMDA1MDk3KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI5My43NTA4IiB4Mj0iNDM1LjEzODUiIHhsaW5rOmhyZWY9IiNhIiB5MT0iMzkzLjM2MjciIHkyPSI1MS45ODM2Ii8+PGxpbmVhckdyYWRpZW50IGlkPSJjIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEuMDAyMDYxIDAgMCAtMS4wMDIwNjEgLTE4LjM5ODkyNCA1MDQuMDA1MDk3KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIxMDIuNTY1NiIgeDI9IjQ0My45NTMyIiB4bGluazpocmVmPSIjYSIgeTE9IjQwMi4xODYiIHkyPSI2MC43OTg0Ii8+PHBhdGggZD0ibTQ1Mi40OTIxODggMjU2LjEzNjcxOWMyNC42NjAxNTYtNDUuOTkyMTg4IDI5LjY5NTMxMi05Mi4wMjM0MzggOS4xNDA2MjQtMTI3LjYyMTA5NC0yMC41NTg1OTMtMzUuNjAxNTYzLTYyLjY0NDUzMS01NC4xMzY3MTktMTE0LjU5Mzc1LTU1Ljg3ODkwNi0zLjc3MzQzNy02LjIwNzAzMS03Ljg1OTM3NC0xMi4yMjI2NTctMTIuMjM4MjgxLTE4LjAxOTUzMSA0LjUxOTUzMS01Ljg3MTA5NCA2Ljk4NDM3NS0xMy4wNzAzMTMgNy4wMTU2MjUtMjAuNDgwNDY5LjAyNzM0NC0xOC44MjQyMTktMTUuMjA3MDMxLTM0LjEwOTM3NTItMzQuMDMxMjUtMzQuMTM2NzE5LTkuMjI2NTYyLS4wMTU2MjUtMTguMDcwMzEyIDMuNzE0ODQ0LTI0LjUgMTAuMzM1OTM4LTEzLjQwNjI1LTYuNjg3NS0yOC4xNjQwNjItMTAuMjIyNjU3LTQzLjE0NDUzMS0xMC4zMzIwMzE3NS00MS4zNzUgMC03OC45NDkyMTkgMjcuNzE0ODQzNzUtMTA2LjUzNTE1NiA3Mi41OTc2NTU3NS01Mi4zMDg1OTQgMS41NzAzMTMtOTQuODE2NDA3IDIwLjIzNDM3Ni0xMTUuNDE0MDYzIDU1LjkxMDE1Ny0yMC41OTc2NTYgMzUuNjc5Njg3LTE1LjQ4ODI4MSA4MS42MTMyODEgOS4xNjQwNjMgMTI3LjYwOTM3NS0yMS4zMzIwMzEgMzkuMzYzMjgxLTI4LjAyMzQzOCA3OC44MDQ2ODctMTYuNTE5NTMxIDExMi4wMDc4MTItMTMuNDk2MDk0IDEzLjA5NzY1Ni0xMy44MTY0MDcgMzQuNjYwMTU2LS43MTg3NSA0OC4xNTYyNSAxMS43MzQzNzQgMTIuMDg1OTM4IDMwLjUzNTE1NiAxMy43ODEyNSA0NC4yMzgyODEgMy45OTIxODggMjQuNTA3ODEyIDEzLjQzNzUgNTIuMDM1MTU2IDIwLjQwNjI1IDc5Ljk4NDM3NSAyMC4yNTM5MDYgMjcuNDkyMTg3IDQ0LjIwMzEyNSA2NC43NjU2MjUgNzEuNDY4NzUgMTA1LjgxMjUgNzEuNDY4NzUgNDEuMDQyOTY4IDAgNzguMTI4OTA2LTI3LjEzNjcxOSAxMDUuNTk3NjU2LTcxLjE2MDE1NiAxMi4wNDI5NjktLjMwNDY4OCAyNC4wMzUxNTYtMS42Njc5NjkgMzUuODM5ODQ0LTQuMDcwMzEzIDEwLjM3ODkwNiAxNS43MzQzNzUgMzEuNTUwNzgxIDIwLjA3ODEyNSA0Ny4yODkwNjIgOS42OTkyMTkgOS41MjczNDQtNi4yODUxNTYgMTUuMjg1MTU2LTE2LjkyMTg3NSAxNS4zMzU5MzgtMjguMzM1OTM4LS4wMzUxNTYtMy40ODA0NjgtLjYwOTM3NS02LjkzMzU5My0xLjcwMzEyNS0xMC4yMzgyODEgNy41ODIwMzEtNi43NDIxODcgMTQuMDQyOTY5LTE0LjY0ODQzNyAxOS4xNDg0MzctMjMuNDE3OTY5IDIwLjE2MDE1Ni0zNC45MzM1OTMgMTYuODMyMDMyLTgwLjM2MzI4MS05LjE2Nzk2OC0xMjguMzM5ODQzem0tNS42NDA2MjYtMTE5LjA4OTg0NGMxNi40NDUzMTMgMjguNDg0Mzc1IDEzLjY1MjM0NCA2NC45NjQ4NDQtNC4zNTkzNzQgMTAyLjUxMTcxOS0xNi4xNjQwNjMtMjQuNTU0Njg4LTM1LjU3ODEyNi00Ni44MDQ2ODgtNTcuNzEwOTM4LTY2LjE1MjM0NC01LjY2NDA2Mi0yOS4wNjY0MDYtMTUuMTc5Njg4LTU3LjI1LTI4LjI5Njg3NS04My44MDQ2ODggNDEuMjM0Mzc1IDMuMjkyOTY5IDc0IDE5LjA5NzY1NyA5MC4zNjcxODcgNDcuNDQ1MzEzem0tMTEwLjE1NjI1IDI4Ni43NDIxODdjLTIzLjgyNDIxOC0uNTQyOTY4LTQ3LjQ5MjE4Ny00LjAxOTUzMS03MC40Njg3NS0xMC4zNTE1NjIgMTcuMjM0Mzc2LTcuMDUwNzgxIDMzLjk4MDQ2OS0xNS4yNSA1MC4xMjUtMjQuNTMxMjUgMTYuMjE4NzUtOS4zNjMyODEgMzEuODAwNzgyLTE5LjgwMDc4MSA0Ni42MzY3MTktMzEuMjM0Mzc1LTYgMjMuMDQyOTY5LTE0LjgyODEyNSA0NS4yNS0yNi4yOTI5NjkgNjYuMTE3MTg3em0tMjguODc1LTQ5LjY2MDE1NmMtMjEuNjAxNTYyIDEyLjQ3MjY1Ni00NC4zMTI1IDIyLjkyMTg3NS02Ny44Mzk4NDMgMzEuMjAzMTI1LTIzLjU4MjAzMS04LjI2MTcxOS00Ni4zMzk4NDQtMTguNzEwOTM3LTY3Ljk3NjU2My0zMS4yMDMxMjUtMjEuNTExNzE4LTEyLjM4MjgxMi00MS44NDM3NS0yNi43MTA5MzctNjAuNzM4MjgxLTQyLjgwNDY4Ny05LjE3NTc4MS00OS4yODEyNS05LjI3MzQzNy05OS44MjAzMTMtLjI5Mjk2OS0xNDkuMTM2NzE5IDE4LjkzNzUtMTYuMzEyNSAzOS4zNzUtMzAuODA4NTk0IDYxLjAzMTI1LTQzLjI4OTA2MiAyMS42MjUtMTIuNTMxMjUgNDQuMzU5Mzc1LTIzLjAzMTI1IDY3LjkxNzk2OS0zMS4zNzUgNDcuMzEyNSAxNi43OTI5NjggOTEuMTI4OTA2IDQyLjE0NDUzMSAxMjkuMjY5NTMxIDc0Ljc5Mjk2OCA0LjUwNzgxMyAyNC4zMDA3ODIgNi43Njk1MzIgNDguOTY4NzUgNi43NTc4MTMgNzMuNjgzNTk0LjA0Njg3NSAyNS4xMTcxODgtMi4yMzgyODEgNTAuMTg3NS02LjgyODEyNSA3NC44Nzg5MDYtMTkuMDUwNzgyIDE2LjI3NzM0NC0zOS41NjY0MDYgMzAuNzU3ODEzLTYxLjI4NTE1NiA0My4yNXptLTE5MC40Mjk2ODctMTYuMDQyOTY4YzE0LjY2Nzk2OSAxMS4yNzM0MzcgMzAuMDU4NTk0IDIxLjU2NjQwNiA0Ni4wNzgxMjUgMzAuODIwMzEyIDE2LjEwNTQ2OSA5LjI2OTUzMSAzMi43OTI5NjkgMTcuNDkyMTg4IDQ5Ljk1NzAzMSAyNC42MDkzNzUtMjIuNzkyOTY5IDYuMjUzOTA2LTQ2LjI2MTcxOSA5LjY5MTQwNi02OS44OTA2MjUgMTAuMjQyMTg3LTExLjM3ODkwNi0yMC43MzQzNzQtMjAuMTYwMTU2LTQyLjc5Mjk2OC0yNi4xNDQ1MzEtNjUuNjcxODc0em0tMjYuMjg1MTU2LTQ1LjM3MTA5NGMtMTcuMDExNzE5LTE2LjY4MzU5NC0zMS44OTg0MzgtMzUuNDAyMzQ0LTQ0LjMyMDMxMy01NS43MzA0NjkgMTIuMzQzNzUtMjAuNDM3NSAyNy4xNTYyNS0zOS4yNzM0MzcgNDQuMTAxNTYzLTU2LjA4OTg0NC00Ljg4NjcxOSAzNy4xMDU0NjktNC44MDg1OTQgNzQuNjk5MjE5LjIxODc1IDExMS43ODUxNTd6bTUyLjA1NDY4Ny0yMjMuNzE4NzVjMjMuODcxMDk0LjUzNTE1NiA0Ny41ODU5MzggNC4wMjczNDQgNzAuNTk3NjU2IDEwLjQwMjM0NC0xNy4yNzczNDMgNy4xMjg5MDYtMzQuMDYyNSAxNS4zOTQ1MzEtNTAuMjQ2MDkzIDI0Ljc0NjA5My0xNi4xMzI4MTMgOS4zMTI1LTMxLjYzNjcxOSAxOS42NjQwNjMtNDYuNDIxODc1IDMwLjk5MjE4OCA1LjkzMzU5NC0yMy4wMzEyNSAxNC42ODM1OTQtNDUuMjQ2MDk0IDI2LjA1NDY4Ny02Ni4xNDA2MjV6bTIxOS45ODgyODIgNjYuNDkyMTg3Yy0xNC44Nzg5MDctMTEuNDcyNjU2LTMwLjQ5NjA5NC0yMS45NDkyMTktNDYuNzUzOTA3LTMxLjM3MTA5My0xNi4xODc1LTkuMzUxNTYzLTMyLjk4MDQ2OS0xNy42MTcxODgtNTAuMjYxNzE5LTI0Ljc0NjA5NCAyMy4wODU5MzgtNi4zOTg0MzggNDYuODc1LTkuODk0NTMyIDcwLjgyODEyNi0xMC40MTAxNTYgMTEuNDMzNTkzIDIxLjAxNTYyNCAyMC4yMzA0NjggNDMuMzU5Mzc0IDI2LjE4NzUgNjYuNTI3MzQzem0yNi4yODUxNTYgNDUuNzEwOTM4YzE2LjgyODEyNSAxNi42NjAxNTYgMzEuNTM1MTU2IDM1LjMzOTg0MyA0My43NzM0MzcgNTUuNjEzMjgxLTEyLjMxMjUgMjAuMjE4NzUtMjcuMDY2NDA2IDM4Ljg0NzY1Ni00My45Mjk2ODcgNTUuNDY0ODQ0IDIuNS0xOC42NTYyNSAzLjc0NjA5NC0zNy40NTcwMzIgMy43MzgyODEtNTYuMjc3MzQ0LS4wMTE3MTktMTguMzI0MjE5LTEuMjE4NzUtMzYuNjI4OTA2LTMuNjA5Mzc1LTU0LjgwMDc4MXptLTgxLjc1LTE4NC4xMzI4MTNjOS40MjU3ODEgMCAxNy4wNjY0MDYgNy42NDA2MjUgMTcuMDY2NDA2IDE3LjA2NjQwNiAwIDkuNDI1NzgyLTcuNjQwNjI1IDE3LjA2NjQwNy0xNy4wNjY0MDYgMTcuMDY2NDA3LTkuNDI1NzgyIDAtMTcuMDY2NDA2LTcuNjQwNjI1LTE3LjA2NjQwNi0xNy4wNjY0MDcgMC05LjQyNTc4MSA3LjY0MDYyNC0xNy4wNjY0MDYgMTcuMDY2NDA2LTE3LjA2NjQwNnptLTY3LjU0Mjk2OSAwYzEyLjAzOTA2My4xMDkzNzUgMjMuOTA2MjUgMi45MDIzNDQgMzQuNzMwNDY5IDguMTY3OTY5LS44MzU5MzggMi44OTQ1MzEtMS4yODEyNSA1Ljg5MDYyNS0xLjMyMDMxMyA4LjkwMjM0NC0uMDYyNSAxOC43ODkwNjIgMTUuMTIxMDk0IDM0LjA3MDMxMiAzMy45MTAxNTcgMzQuMTMyODEyIDQuODI4MTI0LjAxNTYyNSA5LjYwNTQ2OC0uOTk2MDkzIDE0LjAxMTcxOC0yLjk2ODc1IDEuODM5ODQ0IDIuNDMzNTk0IDMuNjMyODEzIDQuOTI5Njg4IDUuMzgyODEzIDcuNDkyMTg4LTI5LjYwMTU2MyAxLjY3MTg3NS01OC44Mzk4NDQgNy4zNDc2NTYtODYuOTE3OTY5IDE2Ljg3ODkwNi0yOC4wNTQ2ODgtOS41MzEyNS01Ny4yNjk1MzEtMTUuMjEwOTM3LTg2Ljg1MTU2Mi0xNi44Nzg5MDYgMjMuNTkzNzUtMzQuNzU3ODEzIDUzLjk1MzEyNC01NS43MjY1NjMgODcuMDU0Njg3LTU1LjcyNjU2M3ptLTIwNy4xMjg5MDYgMTE5Ljk4MDQ2OWMxNi40NjA5MzctMjguNTE5NTMxIDQ5LjUzNTE1Ni00NC4zMjAzMTMgOTEuMTIxMDkzLTQ3LjQ4ODI4MS0xMy4xOTUzMTIgMjYuMzI4MTI1LTIyLjc4OTA2MiA1NC4zMTI1LTI4LjUxOTUzMSA4My4xOTkyMTgtMjIuMzcxMDkzIDE5LjQ2ODc1LTQxLjk5NjA5MyA0MS44ODY3MTktNTguMzM1OTM3IDY2LjYzNjcxOS0xNy45MTAxNTYtMzcuNDg0Mzc1LTIwLjY5MTQwNi03My45MDYyNS00LjI2NTYyNS0xMDIuMzQ3NjU2em0xLjYwNTQ2OSAyNzIuNTU0Njg3Yy05LjQyNTc4MiAwLTE3LjA2NjQwNy03LjY0MDYyNC0xNy4wNjY0MDctMTcuMDY2NDA2IDAtOS40MjU3ODEgNy42NDA2MjUtMTcuMDY2NDA2IDE3LjA2NjQwNy0xNy4wNjY0MDYgOS40MjU3ODEgMCAxNy4wNjY0MDYgNy42NDA2MjUgMTcuMDY2NDA2IDE3LjA2NjQwNiAwIDkuNDI1NzgyLTcuNjQwNjI1IDE3LjA2NjQwNi0xNy4wNjY0MDYgMTcuMDY2NDA2em0zMC44Mzk4NDMtMi42NzE4NzRjMi4xNDQ1MzEtNC40OTYwOTQgMy4yNjk1MzEtOS40MTQwNjMgMy4yOTI5NjktMTQuMzk0NTMyIDAtMTguODUxNTYyLTE1LjI4MTI1LTM0LjEzNjcxOC0zNC4xMzI4MTItMzQuMTM2NzE4LTIuOTIxODc2LjAzOTA2Mi01LjgyODEyNi40NTcwMzEtOC42NDQ1MzIgMS4yNDYwOTMtNy42Mjg5MDYtMjUuMjkyOTY5LTIuODc1LTU1LjIxODc1IDExLjgyMDMxMy04NS44Nzg5MDYgMTYuMjYxNzE5IDI0LjY5NTMxMyAzNS43NzczNDMgNDcuMDg1OTM3IDU4LjAyMzQzNyA2Ni41NjI1IDUuODEyNSAyOC44MDQ2ODcgMTUuNDgwNDY5IDU2LjY5OTIxOSAyOC43NDIxODggODIuOTI1NzgxLTIwLjY1MjM0NC0xLjA4MjAzMS00MC44MjAzMTMtNi42NTIzNDQtNTkuMTAxNTYzLTE2LjMyNDIxOHptMTc0LjY4MzU5NCA4OC4wMDM5MDZjLTMyLjgwODU5NCAwLTYyLjk0MTQwNi0yMC41ODIwMzItODYuNDQxNDA2LTU0Ljc4NTE1NiAyOS4yMzQzNzUtMS44MDQ2ODggNTguMDk3NjU2LTcuNDcyNjU3IDg1Ljg0Mzc1LTE2Ljg1MTU2MyAyOC4wMDM5MDYgOS42NzU3ODEgNTcuMjAzMTI1IDE1LjQ2ODc1IDg2Ljc3NzM0MyAxNy4yMTg3NS0yMy40NjA5MzcgMzMuOTg4MjgxLTUzLjQ4ODI4MSA1NC40MTc5NjktODYuMTc5Njg3IDU0LjQxNzk2OXptMTY5Ljk0MTQwNi01OS43MzQzNzVjLTkuNDI1NzgxIDAtMTcuMDY2NDA2LTcuNjQwNjI1LTE3LjA2NjQwNi0xNy4wNjY0MDcgMC05LjQyNTc4MSA3LjY0MDYyNS0xNy4wNjY0MDYgMTcuMDY2NDA2LTE3LjA2NjQwNnMxNy4wNjY0MDcgNy42NDA2MjUgMTcuMDY2NDA3IDE3LjA2NjQwNmMwIDkuNDI1NzgyLTcuNjQwNjI2IDE3LjA2NjQwNy0xNy4wNjY0MDcgMTcuMDY2NDA3em0zNi43Njk1MzEtNTkuMjE4NzVjLTMuNzUzOTA2IDYuMzI0MjE5LTguMzc4OTA2IDEyLjA4NTkzNy0xMy43MzgyODEgMTcuMTI1LTEzLjc1LTEyLjc4OTA2My0zNS4yNjk1MzEtMTIuMDExNzE5LTQ4LjA1ODU5MyAxLjczODI4MS01Ljg4MjgxMyA2LjMyODEyNS05LjEzNjcxOSAxNC42NTIzNDQtOS4xMDU0NjkgMjMuMjg5MDYyIDAgLjgwMDc4Mi4xNzk2ODcgMS41NTQ2ODguMjM4MjgxIDIuMzM5ODQ0LTYuNzQyMTg4IDEuMjc3MzQ0LTEzLjU1ODU5NCAyLjE3MTg3NS0yMC40MDIzNDQgMi42Njc5NjkgMTMuMzAwNzgyLTI2LjM0NzY1NiAyMi45ODA0NjktNTQuMzc1IDI4Ljc3MzQzOC04My4zMjAzMTMgMjIuMTA5Mzc1LTE5LjQxNDA2MiA0MS41MDM5MDYtNDEuNzE0ODQzIDU3LjY2Nzk2OC02Ni4zMDA3ODEgMTguNzIyNjU3IDM5LjAwNzgxMyAyMC40ODA0NjkgNzQuOTkyMTg4IDQuNjI1IDEwMi40NjA5Mzh6bTAgMCIgZmlsbD0idXJsKCNiKSIvPjxwYXRoIGQ9Im0yMzkuNDE3OTY5IDE3MC42Njc5NjljLTQ3LjEyODkwNyAwLTg1LjMzNTkzOCAzOC4yMDMxMjUtODUuMzM1OTM4IDg1LjMzMjAzMXMzOC4yMDcwMzEgODUuMzMyMDMxIDg1LjMzNTkzOCA4NS4zMzIwMzFjNDcuMTI1IDAgODUuMzMyMDMxLTM4LjIwMzEyNSA4NS4zMzIwMzEtODUuMzMyMDMxLS4wNTA3ODEtNDcuMTA1NDY5LTM4LjIyNjU2Mi04NS4yODEyNS04NS4zMzIwMzEtODUuMzMyMDMxem0wIDE1My41OTc2NTZjLTM3LjcwMzEyNSAwLTY4LjI2OTUzMS0zMC41NjI1LTY4LjI2OTUzMS02OC4yNjU2MjVzMzAuNTY2NDA2LTY4LjI2NTYyNSA2OC4yNjk1MzEtNjguMjY1NjI1YzM3LjY5OTIxOSAwIDY4LjI2NTYyNSAzMC41NjI1IDY4LjI2NTYyNSA2OC4yNjU2MjUtLjA0Mjk2OSAzNy42ODc1LTMwLjU4MjAzMiA2OC4yMjY1NjItNjguMjY1NjI1IDY4LjI2NTYyNXptMCAwIiBmaWxsPSJ1cmwoI2MpIi8+PC9zdmc+Cg=="/>
                    <h1>Atomic<strong>Panel</strong></h1>
                    <hr>
                </div>
            </div>
        </div>

    </div>

@endsection
@section('footer')


@endsection
