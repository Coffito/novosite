<?php
class LiveUpdateCom_icagendaCache {
	public $update = array("stuck" => "0", "lastcheck" => "1407940121", "updatedata" => "Tzo4OiJzdGRDbGFzcyI6ODp7czo5OiJzdXBwb3J0ZWQiO2I6MTtzOjU6InN0dWNrIjtiOjA7czo3OiJ2ZXJzaW9uIjtzOjU6IjMuMy44IjtzOjQ6ImRhdGUiO3M6MTA6IjIwMTQtMDctMDQiO3M6OToic3RhYmlsaXR5IjtzOjY6InN0YWJsZSI7czoxMToiZG93bmxvYWRVUkwiO3M6NjQ6Imh0dHA6Ly93d3cuam9vbWxpYy5jb20vZW4vaWNycy9pY2FnZW5kYS0zLTMtOC9pY2FnZW5kYV8zLTMtOC16aXAiO3M6NzoiaW5mb1VSTCI7czo0NToiaHR0cDovL3d3dy5qb29tbGljLmNvbS9lbi9pY3JzL2ljYWdlbmRhLTMtMy04IjtzOjEyOiJyZWxlYXNlbm90ZXMiO3M6MjIzMjoiPGgyPjxzdHJvbmc+PHNwYW4gc3R5bGU9ImNvbG9yOiAjOTkzMzAwOyI+aUM8L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOiAjODA4MDgwOyI+YWdlbmRhPHNwYW4gc3R5bGU9ImNvbG9yOiAjNjY2NjY2OyI+4oSiPC9zcGFuPjwvc3Bhbj4gMy4zLjg8YnIgLz48L3N0cm9uZz48c3BhbiBzdHlsZT0iZm9udC1zaXplOiA4cHQ7IGNvbG9yOiAjMzMzMzMzOyI+MjAxNC4wNy4wNDwvc3Bhbj48L2gyPjxociAvPjxwPjxzcGFuIGxhbmc9ImVuIj48c3Bhbj48c3BhbiBsYW5nPSJlbiI+PHNwYW4+PHN0cm9uZz5XZSBhZHZpc2UgdGhhdCB5b3XCoGFsd2F5cyBwZXJmb3JtIGEgYmFja3VwIGJlZm9yZSBtYWtpbmcgYW55IGNoYW5nZXMgdG8geW91ciBzaXRlLjxiciAvPjxlbT48c3BhbiBzdHlsZT0iY29sb3I6ICNmZjAwMDA7Ij48c3BhbiBzdHlsZT0iY29sb3I6ICMwMDAwMDA7Ij5NaW5pbXVtIHBocCB2ZXJzaW9uIDUuMy4xMCBpcyByZWNvbW1lbmRlZC48L3NwYW4+PC9zcGFuPjwvZW0+PGJyIC8+PC9zdHJvbmc+PC9zcGFuPjwvc3Bhbj48L3NwYW4+PC9zcGFuPjwvcD48cD48c3BhbiBsYW5nPSJlbiI+PHNwYW4+PHNwYW4gbGFuZz0iZW4iPjxzcGFuPjxzdHJvbmc+WW91IGNhbiB1c2UgdGhpcyB2ZXJzaW9uIGJvdGggb24gam9vbWxhIDIuNSwgMy4yIGFuZCAzLjMuIEl0IGlzIGEgY3Jvc3MtcGxhdGZvcm0gdmVyc2lvbi48L3N0cm9uZz48L3NwYW4+PC9zcGFuPjwvc3Bhbj48L3NwYW4+PC9wPjxwPjxzdHJvbmc+PGJyIC8+UmVsZWFzZSBOb3RlcyA6PGJyIC8+PC9zdHJvbmc+KyBBZGRlZCA6IEV2ZW50cyBSU1MgZmVlZHMgaW50ZWdyYXRlZCB0byBKb29tbGEgKFRoaXMgaXMgYSBwYXJ0aWFsIGludGVncmF0aW9uLCBkaXNwbGF5aW5nIGFsbCBldmVudHMuIEFuIGFkdmFuY2VkIGludGVncmF0aW9uIHdpdGggb3B0aW9ucywgYW5kIGV2ZW50cyBpbWFnZSBpbiB0aGUgUlNTIGZlZWQsIHdpbGwgYmUgYWRkZWQgaW4gMy40LjAgdmVyc2lvbiwgdGhhbmtzIHRvIHRoZSBuZXcgaUMgTGlicmFyeSBub3QgeWV0IGltcGxlbWVudGVkKS48YnIgLz5+IENoYW5nZWQgOiBDaGFuZ2VMb2cgZGVzaWduPGJyIC8+IyBbSElHSF0gRml4ZWQgOiBkaWQgbm90IHNhdmUgdGhlIGRhdGUgc2VsZWN0ZWQgZHVyaW5nIHJlZ2lzdHJhdGlvbiBpbiBkYXRldGltZSBkYXRhYmFzZSBmb3JtYXQgLCBkZXBlbmRpbmcgb24gZGF0ZSBmb3JtYXQgc2V0dGluZ3MgKHdhcyBub3Qgd29ya2luZyBwcm9wZXJseSB3aXRoIG5hbWUgb2YgdGhlIGRheSBvZiB0aGUgd2VlayBkaXNwbGF5IGRpc3BsYXllZCwgZWcuIFNhdHVyZGF5LCAyMSBKdW5lIDIwMTQsIG9yIGlmIEFNL1BNIHNlbGVjdGVkKS48YnIgLz4jIFtMT1ddIEZpeGVkIDogcXVvdGUgaXNzdWUgaW4gc2hvcnQgZGVzY3JpcHRpb24gd2hlbiBzaGFyaW5nIG9uIGZhY2Vib29rLjxzdHJvbmc+PGJyIC8+PGJyIC8+Q2hhbmdlZCBmaWxlcyBpbiAzLjMuODxiciAvPjwvc3Ryb25nPn4gYWRtaW4vYWRkL2Nzcy9pY2FnZW5kYS5jc3M8YnIgLz4rIGFkbWluL0NIQU5HRUxPRy5waHA8YnIgLz4tIGFkbWluL1VQREFURUxPR1MucGhwPGJyIC8+fiBhZG1pbi9tb2RlbHMvZmllbGRzL21vZGFsL2V2dF9kYXRlLnBocDxiciAvPn4gYWRtaW4vdmlld3MvaWNhZ2VuZGEvdG1wbC9jb2xvci5waHA8YnIgLz5+IGFkbWluL3ZpZXdzL2ljYWdlbmRhL3RtcGwvZGVmYXVsdC5waHA8YnIgLz5+IGFkbWluL3ZpZXdzL2ljYWdlbmRhL3ZpZXcuaHRtbC5waHA8YnIgLz5+IGljYWdlbmRhLnhtbDxiciAvPn4gc2NyaXB0LmljYWdlbmRhLnBocDxiciAvPn4gc2l0ZS9oZWxwZXJzL2ljbW9kZWwucGhwPGJyIC8+fiBzaXRlL21vZGVscy9saXN0LnBocDxiciAvPn4gc2l0ZS92aWV3cy9saXN0L3RtcGwvZGVmYXVsdC5waHA8YnIgLz5+IHNpdGUvdmlld3MvbGlzdC90bXBsL2V2ZW50LnBocDxiciAvPn4gc2l0ZS92aWV3cy9saXN0L3RtcGwvcmVnaXN0cmF0aW9uLnBocDxiciAvPisgc2l0ZS92aWV3cy9saXN0L3ZpZXcuZmVlZC5waHA8YnIgLz48YnIgLz48L3A+PGhyIC8+PHA+PHNwYW4gc3R5bGU9ImNvbG9yOiAjODA4MDgwOyI+PGVtPjxzcGFuIHN0eWxlPSJmb250LXNpemU6IDhwdDsiPklmIHlvdSBlbmNvdW50ZXIgYSBidWcsIHRoYW5rcyB0byByZXBvcnQgaXQgb24gdGhlIEpvb21saUMgZm9ydW0sIHNvIHRoYXQgaSBjYW4gcHJvdmlkZSBhIGZpeCBhcyBmYXN0IGFzIHBvc3NpYmxlLjwvc3Bhbj48L2VtPjwvc3Bhbj48L3A+PHA+wqA8L3A+Ijt9");
}
?>